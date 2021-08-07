<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contest;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowContestsComponent extends Component
{
    use WithPagination;


    public function deleteContest($contest_id)
    {
        $contest = Contest::find($contest_id);
        $contest_title = $contest->title;

        $contest->delete($contest_id);

        $message = " مسابقه <b>$contest_title</b> با موفقیت حذف گردید. ";

        session()->flash('message', $message);

        return redirect()->route('admin.showContests');
    }

    public function render()
    {
        $contests = Contest::withCount('questions')->paginate(10);
        return view('livewire.admin.admin-show-contests-component',[
            'contests' => $contests
        ])->layout('layouts.admin-base');
    }
}
