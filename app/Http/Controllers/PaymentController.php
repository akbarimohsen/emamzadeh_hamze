<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;


class PaymentController extends Controller
{
    public function purchase(Request $request, $id){
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $user = Auth::user();
        $order = Order::find( intval( $id ) );
        $price = intval($request->get("price"));
        $first_name = $request->get("first_name");
        $last_name = $request->get('last_name');
        $email = $request->get("email");
        $phone_number = $request->get("phone_number");


        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->email = $email;
        $order->phone_number = $phone_number;

        $order->save();

        if( $user->id == $order->client->id ){

            $invoice = (new Invoice)->amount($price);
                // Purchase and pay the given invoice.
                // You should use return statement to redirect user to the bank page.
            return Payment::callbackUrl("http://localhost:8000/user/order/$order->id/verify")->purchase($invoice, function($driver, $transactionId){
                // Store transactionId in database as we need it to verify payment in the future.
            })->pay()->render();

        }
    }

    public function addCoursesToUser($order_id){


    }

    public function verify( $id ,Request $request)
    {
        $order_id = intval( $id );

        $order = Order::find($order_id);

        $total_price = 0;

        foreach( $order->courses as $course ){
            $total_price += $course->price;
        }


        try {
            $receipt = Payment::amount($total_price)->transactionId($request->Authority)->verify();
            // You can show payment referenceId to the user.

            $order->is_buy = 1;
            $order->referenceID = $receipt->getReferenceId();
            $order->save();
            $user = Auth::user();
            foreach( $order->courses as $course ){
                $user->courses()->attach( $course->id, ['role' => 'STD'] );
            }

        } catch (InvalidPaymentException $exception) {
            return redirect()->route('user.orders',);
        }

        return redirect()->route('user.order.verify', ['id' => $order->id]);
    }

}
