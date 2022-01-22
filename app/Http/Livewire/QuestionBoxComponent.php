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

        $this->answer = 0;

    }

    public function submit($answer)
    {

        $submitted_answer = QuestionAnswer::where('question_id' ,"=" , $this->question_id)->where('user_id' , "=" ,Auth::user()->id)->first();

        if($submitted_answer == null)
        {
            $data['answer'] = $answer;
            $data['question_id'] = $this->question_id;
            $data['user_id'] = Auth::user()->id;

            QuestionAnswer::create($data);
        }else{
            $submitted_answer->answer = $answer;
            $submitted_answer->save();
        }
        $this->submited = $answer;
    }

    public function edit($answer)
    {
        $answer_model = QuestionAnswer::where('question_id' ,"=" , $this->question_id)->where('user_id' , "=" ,Auth::user()->id)->first();
        $answer_model->answer = $answer;
        $answer_model->save();

        $this->submited = $answer;
    }
    public function render()
    {
        $question = Question::find($this->question_id);

        if(intval($this->answer) != 0)
        {
            $this->submit($this->answer);
        }

        return view('livewire.question-box-component',[
            "question" => $question,
        ]);

    }
}
