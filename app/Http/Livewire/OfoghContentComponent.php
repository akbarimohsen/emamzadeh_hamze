<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use Livewire\Component;

class OfoghContentComponent extends Component
{

    public $c_id;
    public $user_name;
    public $title;
    public $email;
    public $description;

    public function mount($id)
    {
        $this->c_id = $id;
    }

    public function sendComment()
    {
        $data = $this->validate([
            'user_name' => 'required' ,
            'title' => 'required|string' ,
            'email' => 'required|email',
            'description' => 'required|string',
        ]);
        $comment = Comment::create($data);

        $comment->contents()->attach($this->c_id);


        session()->flash('message','نظر شما با موفقیت ثبت شد. به زودی پس از چک کردن آن توسط مدیران سایت نظر شما در اینجا قرار خواهد گرفت');
    }

    public function render()
    {
        $content = Content::find($this->c_id);
        $categories = Category::all();
        $last_contents = Content::where('is_speech',$content->is_speech)->orderBy('created_at' , 'DESC')->limit(5)->get();

        return view('livewire.ofogh-content-component',[
            'content' => $content,
            'categories' => $categories,
            'last_contents' => $last_contents,
        ])->layout('layouts.base');
    }
}
