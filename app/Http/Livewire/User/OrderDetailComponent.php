<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderDetailComponent extends Component
{
    public $order;

    public function mount($id)
    {
        $this->order= Order::find($id);
    }
    public function render()
    {
        $user = Auth::user();

        return view('livewire.user.order-detail-component',[
            'user' => $user
        ])->layout('layouts.base');
    }
}
