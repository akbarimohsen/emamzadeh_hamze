<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contest;
use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowQuestionsComponent extends Component
{
    use WithPagination;

    public $contest_id;

    public function mount($id)
    {
        $this->contest_id = $id;
    }
    public function render()
    {
        $questions = Question::where('contest_id','=' , $this->contest_id)->paginate();
        return view('livewire.admin.admin-show-questions-component',[
            'questions' => $questions,
            'contest_title' => Contest::find($this->contest_id)->title
        ])->layout('layouts.admin-base');
    }
}
