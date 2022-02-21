<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCoursesComponent extends Component
{




    public function render()
    {
        $user = Auth::user();

        return view('livewire.user.my-courses-component', [
            'user' => $user
        ])->layout('layouts.base');

    }
}
