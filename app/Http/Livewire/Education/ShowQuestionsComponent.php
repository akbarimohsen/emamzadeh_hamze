<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use App\Models\Question;
use App\Models\Quiz;
use Livewire\Component;

class ShowQuestionsComponent extends Component
{

    public $course;
    public $heading;
    public $quiz;

    public function mount($id1, $id2, $id3)
    {
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->quiz = Quiz::find($id3);

    }

    public function delete($id)
    {
        $question = Question::find($id);

        $question->delete();

        session()->flash('deleteMessage', 'سوال با موفقیت حذف گردید !!!');
    }

    public function render()
    {
        return view('livewire.education.show-questions-component')->layout('layouts.education-base');
    }
}
