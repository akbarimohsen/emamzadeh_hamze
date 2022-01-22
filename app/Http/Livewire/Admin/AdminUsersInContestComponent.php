<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contest;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminUsersInContestComponent extends Component
{
    public $contest_id;
    public function mount($id)
    {
        $this->contest_id = $id;
    }

    public function deleteUser($id)
    {
        DB::table('user_contest')
        ->where('user_id', $id)
        ->where('contest_id', $this->contest_id)
        ->delete();

        DB::table('question_answers')
        ->join('questions','questions.id', 'question_answers.question_id')
        ->join('contests', 'contests.id','questions.contest_id')
        ->where('question_answers.user_id',$id)
        ->where('contests.id', $this->contest_id)
        ->delete();

        session()->flash('message', 'شرکت کننده با موفقیت از مسابقه حذف گردید.');

        return redirect()->route('admin.contest_users', ['id' => $this->contest_id]);
    }

    public function render()
    {
        $users = Contest::find($this->contest_id)->users;

        return view('livewire.admin.admin-users-in-contest-component',[
            'users' => $users
        ])->layout('layouts.admin-base');
    }
}
