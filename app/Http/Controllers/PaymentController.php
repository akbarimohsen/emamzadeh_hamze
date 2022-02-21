<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

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
        $order = Order::find(intval( $id ));
        $price = intval($request->get("price"));
        $first_name = $request->get("first_name");
        $last_name = $request->get('last_name');
        $email = $request->get("email");
        $phone_number = $request->get("phone_number");

        if( $user->id == $order->client->id ){

            $invoice = (new Invoice)->amount($price);
            // Purchase and pay the given invoice.
            // You should use return statement to redirect user to the bank page.
            return Payment::callbackUrl("https://ehamze.ir/contests")->purchase($invoice, function($driver, $transactionId) {
                    // Store transactionId in database as we need it to verify payment in the future.
            })->pay()->render();

        }
    }


}
