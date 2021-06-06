<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\QuestionAnswer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuestionBoxComponent extends Component
{
    public $question_id;
    public $answer;
    public $submited;

    public function mount($question_id)
    {
        $this->question_id = $question_id;
        $answer = QuestionAnswer::where('question_id' ,"=" , $this->question_id)->where('user_id' , "=" ,Auth::user()->id)->first();
        if($answer == null)
        {
            $this->submited = 0;
        }else{
            $this->submited = $answer->answer;
        }

    }

    public function submit()
    {
        $data = $this->validate([
            "answer" => "required"
        ]);

        $data['answer'] = intval($data["answer"]);
        $data['question_id'] = $this->question_id;
        $data['user_id'] = Auth::user()->id;

        QuestionAnswer::create($data);
        $this->submited = $data['answer'];
    }

    public function render()
    {
        $question = Question::find($this->question_id);
        return view('livewire.question-box-component',[
            "question" => $question,
        ]);
    }
}
