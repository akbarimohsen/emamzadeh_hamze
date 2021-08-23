<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserContestComponent extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.user.user-contest-component',[
            'user' => $user
        ])->layout('layouts.base');
    }
}
