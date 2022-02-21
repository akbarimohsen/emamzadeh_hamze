<?php

namespace App\Http\Livewire\Education;

use App\Models\Course;
use App\Models\Heading;
use App\Models\Lesson;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Faker\Core\File as CoreFile;
use Illuminate\Support\Facades\File;
use Intervention\Image\File as ImageFile;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddLessonComponent extends Component
{
    use WithFileUploads;

    public $course;
    public $heading;

    public $title;
    public $description;
    public $video;


    public function mount($id1,$id2){
        $this->course = Course::find($id1);
        $this->heading = Heading::find($id2);
    }


    public function submit(){


        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'video' => 'required|max:10000000'
        ]);

        $data['heading_id'] = $this->heading->id;


        $course_id = $this->course->id;
        $heading_id = $this->heading->id;
        $name = md5($this->video . microtime()).'.'.$this->video->extension();

        $output = $this->video->storeAs("lessons", $name);

        $data['video'] = $name;



        $lesson = Lesson::create($data);

        session()->flash('createLessonMessage', 'ویدیو جدید اضافه گردید');
        return redirect()->route('education.showcourse',['id' => $this->course->id ]);
    }


    public function render()
    {
        return view('livewire.education.add-lesson-component')->layout('layouts.education-base');
    }
}
