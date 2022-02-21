<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use Livewire\Component;

class ShowCoursesComponent extends Component
{

    public function render()
    {
        $courses = Course::all();

        return view('livewire.admin.show-courses-component',[
            "courses" => $courses
        ])->layout('layouts.admin-base');
    }
}
