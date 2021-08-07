<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use App\Models\Contest;
use App\Models\Message;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $new_messages_count = Message::where('read' , '=' , 0)->count();
        $new_comments_count = Comment::where('confirm' , '=' , 0)->count();
        $contests_count = Contest::count();

        return view('livewire.admin.admin-dashboard-component',[
            'message_count' => $new_messages_count,
            'comment_count' => $new_comments_count,
            'contests_count' => $contests_count
        ])->layout('layouts.admin-base');
    }
}
