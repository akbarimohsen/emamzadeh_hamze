<?php

namespace App\Http\Livewire\Education\Cart;

use App\lib\zarinpal;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class Cart2Component extends Component
{
    public $order;

    public $first_name;
    public $last_name;
    public $phone_number;
    public $email;
    public $paying;

    public function mount($id){
        $this->order = Order::find($id);
        $user = Auth::user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->phone_number = $user->phone;
        $this->paying = 0;
    }

    public function render()
    {
        $total_price = 0;
        if($this->order->courses->count() > 0)
        {
            foreach($this->order->courses as $course){
                $total_price = $total_price + $course->price;
            }
        }
        return view('livewire.education.cart.cart2-component',[
            'total_price' => $total_price
        ])->layout('layouts.education-base');
    }
}
