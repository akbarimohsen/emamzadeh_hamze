<?php

namespace App\Http\Livewire\User;

use App\Models\Comment;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class CommentsComponent extends Component
{
    public $user;
    public $course;

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function selectCourse($id)
    {
        $this->course = Course::find($id);

    }

    public function confirmComment($state, $id){
        $comment = Comment::find($id);

        if($state == "accept"){
            $comment->confirm = 1;
            session()->flash('ConfirmMessage', 'کامنت مورد نظر تایید گردید.');
        }else{
            $comment->confirm = -1;
            session()->flash('ConfirmMessage', 'کامنت موردنظر رد گردید.');
        }

        $comment->save();
    }

    public function render()
    {
        return view('livewire.user.comments-component')->layout('layouts.base');
    }
}
