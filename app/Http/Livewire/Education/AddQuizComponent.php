<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;
use App\Models\Course;
use App\Models\Heading;
use App\Models\Quiz;

class AddQuizComponent extends Component
{
    public $course;
    public $heading;

    public $title;
    public $description;
    public $time;
    public $total_mark;

    public function mount($id1,$id2){
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
    }

    public function submit(){

        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'time' => 'required|numeric',
            'total_mark' =>'required|numeric'
        ]);

        $data['heading_id'] = $this->heading->id;
        $data['time'] = intval($data['time']);
        $data['total_mark'] = intval($data['total_mark']);

        $quiz = Quiz::create( $data );

        session()->flash('createQuiz', 'کوییز با موفقیت ایجاد گردید.!!!');

    }

    public function render()
    {
        return view('livewire.education.add-quiz-component')->layout('layouts.education-base');
    }
}
