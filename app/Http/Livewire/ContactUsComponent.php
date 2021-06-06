<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $user_name;
    public $title;
    public $email;
    public $mobile;
    public $description;

    public function submit()
    {
        $data = $this->validate([
            'user_name' => 'required|string',
            'title' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'description' => 'required|string'
        ]);

        Message::create($data);
        session()->flash('message' ,'پیام شما با موفقیت ارسال شد');

    }

    public function render()
    {
        return view('livewire.contact-us-component')->layout('layouts.base');
    }
}
