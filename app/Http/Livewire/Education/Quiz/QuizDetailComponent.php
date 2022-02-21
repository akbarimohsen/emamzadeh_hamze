<?php

namespace App\Http\Livewire\Education\Quiz;

use App\Models\Course;
use App\Models\Heading;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class QuizDetailComponent extends Component
{

    public $course;
    public $heading;
    public $quiz;
    public $score;

    public function mount($id1, $id2, $id3){
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->quiz = Quiz::find($id3);
    }

    public function get_score()
    {
        $user = Auth::user();
        $questions = $this->quiz->questions;
        if($questions->count() == 0){
            return 0;
        }

        $exist = $user->quizzes->where('id', $this->quiz->id)->first();

        if($exist == null){
            $score = -1;
        }else{
        $questions_count = $questions->count();

        $sum = 0;
        foreach($questions as $question){
            $answer = DB::table('question_answers')
            ->where('question_id', $question->id)
            ->where('user_id', $user->id)
            ->first();

            if($answer->answer == $question->real_answer){
                $sum = $sum + 1;
            }
        }
        $score = $sum/$questions_count;
        }

        return $score;
    }

    public function render()
    {


        $this->score = $this->get_score();

        return view('livewire.education.quiz.quiz-detail-component',[
        ])->layout('layouts.education-base');
    }
}
