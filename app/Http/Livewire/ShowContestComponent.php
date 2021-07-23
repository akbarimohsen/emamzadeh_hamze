<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comment;

class ShowContestComponent extends Component
{

    public $contest_id;

    public $user_name;
    public $email;
    public $title;
    public $description;


    public function mount($contest_id)
    {
        $this->contest_id = $contest_id;
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

        $comment->contests()->attach($this->contest_id);


        session()->flash('message','نظر شما با موفقیت ثبت شد. به زودی پس از چک کردن آن توسط مدیران سایت نظر شما در اینجا قرار خواهد گرفت');
    }

    public function render()
    {
        $contest = Contest::find($this->contest_id);
        $last_contests = Contest::orderBy('start','DESC')->limit(5)->get();
        $now = Carbon::now();
        $start = Carbon::createFromFormat("Y-m-d H:i:s",$contest->start);
        $end = Carbon::createFromFormat("Y-m-d H:i:s",$contest->end);
        return view('livewire.show-contest-component',[
            "contest" => $contest,
            "last_contests" => $last_contests,
            'now' => $now,
            'start' => $start,
            'end' => $end
        ])->layout('layouts.base');
    }
}
