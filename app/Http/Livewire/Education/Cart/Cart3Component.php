<?php

namespace App\Http\Livewire\Education\Cart;

use App\Models\Order;
use Livewire\Component;

class Cart3Component extends Component
{
    public $order;

    public function mount($id)
    {
        $this->order = Order::find($id);
    }


    public function render()
    {
        return view('livewire.education.cart.cart3-component')->layout('layouts.education-base');
    }
}
