<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ScoreboardComponent extends Component
{

    public $contest_id;
    public $question_numbers;
    public $users_id;


    public function mount($contest_id)
    {
        $this->contest_id = $contest_id;
        $this->question_numbers = Contest::find($contest_id)->questions()->count();
        $users = Contest::find($this->contest_id)->users;

        foreach($users as $user)
        {
            $this->users_id[] = $user->id;
        }
    }

    public function render()
    {
        if($this->users_id)
        {
            $users = DB::table('question_answers')
            ->join('questions' , 'questions.id' , "=" , 'question_answers.question_id')
            ->join('contests','contests.id' , "=" ,"questions.contest_id")
            ->join("users" , "users.id" , "=" , "question_answers.user_id")
            //->join('user_contest','user_contest.user_id',"=",'users.id')
            ->where('contests.id' , '=' , $this->contest_id)
            ->select("users.name" , "users.id" , DB::raw("COUNT(users.id) as correct_number"))
            ->whereColumn("questions.real_answer" , "question_answers.answer")
            ->whereIn('users.id',$this->users_id)
            ->groupBy("users.id")
            ->orderBy("correct_number" , "desc")
            ->orderBy('question_answers.created_at')
            ->get();
        }else{
            $users = null;
        }

        $contest = Contest::find($this->contest_id);
        return view('livewire.scoreboard-component',[
            "users" => $users,
            'contest' => $contest
        ])->layout('layouts.base');
    }
}
