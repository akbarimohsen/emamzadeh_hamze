<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LessonComponent extends Component
{

    public $course;
    public $heading;
    public $lesson;


    public function mount($id1, $id2, $id3)
    {
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->lesson = Lesson::find($id3);
    }

    public function checkRead(){
        $user = Auth::user();
        $readState = DB::table('user_lesson')->where('user_id', $user->id)->where('lesson_id', $this->lesson->id)->first();

        if($readState){
            return 1;
        }else{
            return 0;
        }
    }

    public function readLesson(){
        $user = Auth::user();
        $lesson = Lesson::find($this->lesson->id);

        $is_read = $this->checkRead();

        if( $is_read == 0 ){
          $user->lessons()->attach($this->lesson->id);
          session()->flash('readLessonMessage', 'شما این درس را خواندید !!!');
        }
    }

    public function render()
    {

        $is_read = $this->checkRead();
        return view('livewire.education.lesson-component',[
            'is_read' => $is_read
        ])->layout('layouts.education-base');
    }
}
