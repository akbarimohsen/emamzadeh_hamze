<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ScoreboardComponent extends Component
{

    public $contest_id;
    public $question_numbers;
    public function mount($contest_id)
    {
        $this->contest_id = $contest_id;
        $this->question_numbers = Contest::find($contest_id)->questions()->count();
    }
    public function render()
    {
        $users = DB::table('question_answers')
        ->join('questions' , 'questions.id' , "=" , 'question_answers.question_id')
        ->join('contests','contests.id' , "=" ,"questions.contest_id")
        ->join("users" , "users.id" , "=" , "question_answers.user_id")
        ->where('contests.id' , '=' , $this->contest_id)
        ->select("users.name" , "users.id" , DB::raw("COUNT(users.id) as correct_number"))
        ->whereColumn("questions.real_answer" , "question_answers.answer")
        ->groupBy("users.id")
        ->orderBy("correct_number" , "desc")
        ->get();

        return view('livewire.scoreboard-component',[
            "users" => $users
        ])->layout('layouts.base');
    }
}
