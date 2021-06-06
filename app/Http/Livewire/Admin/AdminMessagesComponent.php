<?php

namespace App\Http\Livewire\Admin;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class AdminMessagesComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $messages = Message::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-messages-component',[
            'messages' => $messages
        ])->layout('layouts.admin-base');
    }
}
