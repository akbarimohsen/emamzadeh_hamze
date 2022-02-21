<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrdersComponent extends Component
{


    public function deleteOrder($order_id)
    {
        $order = Order::find($order_id);
        $order->delete();

        session()->flash('deleteOrderMessage', 'سفارش شما حذف گردید !!!');

    }

    public function render()
    {
        $user = Auth::user();

        return view('livewire.user.orders-component',[
            'user' => $user
        ])->layout('layouts.base');
    }
}
