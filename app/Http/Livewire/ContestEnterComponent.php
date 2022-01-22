<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ContestEnterComponent extends Component
{
    use WithPagination;
    public $contest_id;
    public $end_exam_time;
    public $all_questions;

    public function mount($contest_id)
    {
        $this->contest_id = $contest_id;
        $exam_time = Contest::find($contest_id)->time;
        $user_id = Auth::user()->id;

        if(Session::has("user$user_id"))
        {
            $this->end_exam_time = session("user$user_id");
        }else{
            $date = Carbon::now();
            $minutes = floor($exam_time/60);
            $seconds = floor($exam_time%60);

            $date->addMinutes($minutes);
            $date->addSeconds($seconds);
            $this->end_exam_time = $date->toDateTimeString();
            session(["user$user_id" => $this->end_exam_time]);
        }

    }


    public function endContest()
    {
        $contest = Auth::user()->contests()->where('contest_id',$this->contest_id)->first();
        if($contest == null)
        {
            Auth::user()->contests()->attach(['contest_id' => $this->contest_id]);
        }
        $user_id = Auth::user()->id;
        session()->flash('contest_message' ,".آزمون با موفقیت به پایان رسید.");
        session()->forget("user$user_id");
        return redirect()->route('showContest', ['contest_id' => $this->contest_id]);
    }
    public function render()
    {
        $questions = Question::where('contest_id' , '=' , $this->contest_id)->paginate(3);

        return view('livewire.contest-enter-component',[
            "questions" => $questions,
            "end_exam_time" => $this->end_exam_time
        ])->layout('layouts.base');


    }
}
