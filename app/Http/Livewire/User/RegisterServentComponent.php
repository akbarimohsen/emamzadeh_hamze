<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use SoapClient;


class RegisterServentComponent extends Component
{
    public $activity;

    public $activities = [
        1 => 'عمرانی و پشتیبانی',
        2 => 'انتظامات و خدمات',
        3 => 'رسانه و فضای مجازی',
        4 => 'فرهنگی',
        5 => 'مداحی',
        6 => 'تصویربرداری و مستند سازی'
    ];

    public function submit(){

        $data = $this->validate([
            'activity' => 'required'
        ]);

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->activity = intval( $data['activity'] );
        $user->save();

        session()->flash('message','اطلاعات شما با موفقیت در سامانه ثبت گردید.');
        // return redirect()->route('user.register_servant');
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.user.register-servent-component',[
            'user' => $user
        ])->layout('layouts.base');
    }

}
