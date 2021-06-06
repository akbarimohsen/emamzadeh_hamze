<?php

namespace App\Http\Livewire\Admin;

use App\Models\Content;
use App\Models\Contest;
use App\Models\Question;
use Livewire\Component;

class AdminAddQuestionComponent extends Component
{

    public Contest $contest;
    public $question;
    public $answer1;
    public $answer2;
    public $answer3;
    public $answer4;
    public $real_answer;

    public function mount($id)
    {
        $this->contest = Contest::find($id);
    }

    public function submit()
    {
        $data = $this->validate([
            'question' => "required|string",
            "answer1" => "required|string",
            "answer2" => "required|string",
            "answer3" => "required|string",
            "answer4" => "required|string",
            "real_answer" => "required"
        ]);

        $data['contest_id'] = $this->contest->id;
        $contest_title = $this->contest->title;

        Question::create($data);

        session()->flash('message' , "سوال مورد نظر شما در مسابقه <strong>$contest_title</strong> ثبت شد .");

        return redirect()->route('admin.showContests');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-question-component',[
            'contest' => $this->contest
        ])->layout('layouts.admin-base');
    }
}
