<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use Livewire\Component;

class EditHeadingComponent extends Component
{
    public $heading;
    public $course;
    public $title;

    public function mount($id1, $id2){

        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
        $this->title = $this->heading->title;
    }

    public function submit(){

        $data = $this->validate([
            'title' => 'required|string'
        ]);

        $heading = Heading::find($this->heading->id);
        $heading->title = $data['title'];
        $heading->course_id = $this->heading->course_id;
        $heading->teacher_id = $this->heading->teacher_id;

        $heading->save();

        session()->flash('editHeading', 'سرفصل با موفقیت تغییر یافت !!!');

    }


    public function render()
    {
        return view('livewire.education.edit-heading-component')->layout('layouts.education-base');
    }
}
