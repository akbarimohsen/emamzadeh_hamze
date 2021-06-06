<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use Livewire\Component;

class AdminQuestionBoxComponent extends Component
{

    public $question_id;
    public function mount($question_id)
    {
        $this->question_id = $question_id;
    }

    public function delete()
    {
        $question = Question::find($this->question_id);
        $contest_id = $question->contest_id;
        $question->delete();
        session()->flash('message' , 'سوال با موفقیت حذف گردید.');
        return redirect()->route('admin.showQuestion' ,['id' => $contest_id]);
    }
    public function render()
    {
        $question_box = Question::find($this->question_id);

        return view('livewire.admin.admin-question-box-component',[
            "question_box" => $question_box
        ])->layout('layouts.admin-base');
    }
}
