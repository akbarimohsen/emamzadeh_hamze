<?php

namespace App\Http\Livewire\User\Teacher;

use App\Models\User;
use Livewire\Component;

class ShowCoursesComponent extends Component
{
    public $teacher_id;
    public function mount($id){
        $this->teacher_id = $id;
    }

    public function render()
    {
        $teacher = User::find($this->teacher_id);
        return view('livewire.user.teacher.show-courses-component',[
            "teacher" => $teacher
        ])->layout('layouts.base');
    }
}
