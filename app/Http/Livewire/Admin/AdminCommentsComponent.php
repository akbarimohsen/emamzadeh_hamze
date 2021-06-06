<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCommentsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $comments = Comment::paginate(15);
        return view('livewire.admin.admin-comments-component',[
            'comments' => $comments
        ])->layout('layouts.admin-base');
    }
}
