<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use App\Models\User;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class AddCourseComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $short_description;
    public $price;
    public $start_date;
    public $image;
    public $teacher_id;

    public function submit(){
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'teacher_id' => 'required'
        ]);


        $data['teacher_id'] = intval( $this->teacher_id );

        $dest_path = public_path('/assets/images/courses');

        $img_name = time() . '.' . $this->image->extension();
        $img = Image::make($this->image->path());

        $img->resize(460 , 300 , function($constraint){
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['image'] = $img_name;

        $course = Course::create($data);

        $teacher = User::find($data['teacher_id']);

        $teacher->teachingCourses()->attach( $course->id,['role' => 'TCH']);

        session()->flash('message' ,'دوره شما شما با موفقیت ایجاد گردید!!!');
        return redirect()->route('admin.showCourses');
    }


    public function render()
    {
        $teachers = User::where('utype','TCH')->get();
        return view('livewire.admin.add-course-component',
        [
            'teachers' => $teachers
        ]
        )->layout('layouts.admin-base');
    }
}
