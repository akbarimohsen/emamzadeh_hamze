<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class AdminCommentBoxComponent extends Component
{
    public $comment_id;
    public function mount($comment_id)
    {
        $this->comment_id = $comment_id;
    }
    public function confirm($status)
    {
        $comment = Comment::find($this->comment_id);
        if($status == 'accept')
        {
            $comment->confirm = 1;
        }else if($status == 'reject'){
            $comment->confirm = -1;
        }
        $comment->save();
    }

    public function render()
    {
        $comment_box = Comment::find($this->comment_id);
        return view('livewire.admin.admin-comment-box-component',[
            'comment_box' => $comment_box
        ]);
    }
}
