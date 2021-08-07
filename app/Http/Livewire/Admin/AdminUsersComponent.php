<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminUsersComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.admin.admin-users-component',[
            "users" => $users
        ])->layout('layouts.admin-base');
    }
}
