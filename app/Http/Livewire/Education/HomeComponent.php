<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Date;

class HomeComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $courses = Course::paginate(9);

        return view('livewire.education.home-component',[
            'courses' => $courses
        ])->layout('layouts.education-base');
    }
}
