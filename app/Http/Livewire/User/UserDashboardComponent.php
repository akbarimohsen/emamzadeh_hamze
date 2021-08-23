<?php

namespace App\Http\Livewire\User;

use App\Models\TwofactorCode;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use SoapClient;

class UserDashboardComponent extends Component
{

    public $first_name;
    public $last_name;

    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
    }
    public function updateUser()
    {
        $data = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string'
        ]);

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];

        $user->save();

        session()->flash('updateMessage', 'اطلاعات شما با موفقیت بروزرسانی شد.');
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.user.user-dashboard-component',[
            'user' => $user,
        ])->layout('layouts.base');
    }
}
