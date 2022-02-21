<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddHeadingComponent extends Component
{
    public $course;
    public $title;

    public function mount($id){
        $this->course = Course::find($id);
    }

    public function submit()
    {
        $data = $this->validate([
            'title' => 'required|string'
        ]);

        $data['teacher_id'] = Auth::user()->id;
        $data['course_id'] = $this->course->id;

        $heading = Heading::create($data);

        session()->flash('addHeadingMessage', 'سرفصل با موفقیت اضافه گردید!!!');

        return redirect()->route('education.showcourse', ['id' => $this->course->id]);
    }




    public function render()
    {
        return view('livewire.education.add-heading-component')->layout('layouts.education-base');
    }
}
