<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use Carbon\Carbon;
use Livewire\Component;

class ShowContestComponent extends Component
{

    public $contest_id;


    public function mount($contest_id)
    {
        $this->contest_id = $contest_id;
    }
    public function render()
    {
        $contest = Contest::find($this->contest_id);
        $last_contests = Contest::orderBy('start','DESC')->limit(5)->get();
        $now = Carbon::now();
        $start = Carbon::createFromFormat("Y-m-d H:i:s",$contest->start);
        $end = Carbon::createFromFormat("Y-m-d H:i:s",$contest->end);
        return view('livewire.show-contest-component',[
            "contest" => $contest,
            "last_contests" => $last_contests,
            'now' => $now,
            'start' => $start,
            'end' => $end
        ])->layout('layouts.base');
    }
}
