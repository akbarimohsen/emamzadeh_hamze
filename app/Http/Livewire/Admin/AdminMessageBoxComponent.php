<?php

namespace App\Http\Livewire\Admin;

use App\Models\Message;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminMessageBoxComponent extends Component
{

    public $message_id;
    public function mount($message_id)
    {
        $this->message_id = $message_id;
    }

    public function read()
    {
        $message = Message::find($this->message_id);
        $message->read = 1;
        $message->save();
    }


    public function render()
    {
        $message_box = Message::find($this->message_id);

        $start = Carbon::parse($message_box->created_at);
        $end = Carbon::now();

        $duration = $end->diffInHours($start);


        return view('livewire.admin.admin-message-box-component',[
            'message_box' => $message_box,
            'duration' => $duration
        ])->layout('layouts.admin-base');
    }
}
