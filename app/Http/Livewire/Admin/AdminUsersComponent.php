<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Livewire\Component;

class AdminUsersComponent extends Component
{
    public $role;

    public function changeRole($role, $user_id){
        $user = User::find($user_id);
        $user->utype = $role;
        $user->save();
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.admin.admin-users-component',[
            "users" => $users
        ])->layout('layouts.admin-base');
    }
}
