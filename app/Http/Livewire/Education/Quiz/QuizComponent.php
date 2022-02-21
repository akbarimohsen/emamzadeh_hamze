<?php

namespace App\Http\Livewire\Education\Quiz;

use Livewire\Component;
use App\Models\Course;
use App\Models\Heading;
use App\Models\Quiz;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizComponent extends Component
{
    public $course;
    public $heading;
    public $quiz;
    public $end_quiz_time;

    public function mount($id1, $id2, $id3){
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->quiz = Quiz::find($id3);

        $quiz_time = $this->quiz->time;
        $user_id = Auth::user()->id;

        if(Session::has("quiz_user$user_id"))
        {
            $this->end_quiz_time = session("quiz_user$user_id");
        }else{
            $date = Carbon::now();
            $minutes = floor($quiz_time/60);
            $seconds = floor($quiz_time%60);

            $date->addMinutes($minutes);
            $date->addSeconds($seconds);
            $this->end_quiz_time = $date->toDateTimeString();
            session(["quiz_user$user_id" => $this->end_quiz_time]);
        }
    }

    public function end_quiz()
    {
        $quiz = Auth::user()->quizzes()->where('quiz_id',$this->quiz->id)->first();
        if($quiz == null)
        {
            Auth::user()->quizzes()->attach(['quiz_id' => $this->quiz->id],['role' => 'STD']);
        }
        $user_id = Auth::user()->id;
        session()->flash('quiz_message' ,".کوییز با موفقیت به پایان رسید.");
        session()->forget("quiz_user$user_id");
        return redirect()->route('education.quizDetail', ['id1' => $this->course->id, 'id2' => $this->heading->id, 'id3' => $this->quiz->id]);
    }

    public function render()
    {
        return view('livewire.education.quiz.quiz-component')->layout('layouts.education-base');
    }
}
