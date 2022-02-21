<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use App\Models\Question;
use App\Models\Quiz;
use Livewire\Component;

class AddQuestionComponent extends Component
{
    public $course;
    public $heading;
    public $quiz;

    public $question;
    public $answer1;
    public $answer2;
    public $answer3;
    public $answer4;
    public $real_answer;

    public function submit(){
        $data = $this->validate([
            'question' => 'required|string',
            'answer1' => 'required|string',
            'answer2' => 'required|string',
            'answer3' => 'required|string',
            'answer4' => 'required|string',
            'real_answer' => 'required|numeric'
        ]);

        $data['is_quiz'] = 1;
        $data['quiz_id'] = $this->quiz->id;
        $data['real_answer'] = intval($data['real_answer']);

        $question = Question::create($data);

        session()->flash('createQuestion', 'سوال با موفقیت ایجاد گردید !!!');

    }

    public function mount($id1, $id2, $id3){

        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->quiz = Quiz::find($id3);
    }


    public function render()
    {
        return view('livewire.education.add-question-component')->layout('layouts.education-base');
    }
}
