<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contest;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class AdminAddContestComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $short_description;
    public $description;
    public $start;
    public $end;
    public $time;
    public $image;

    public function submit()
    {
        $data = $this->validate([
            "title" => 'required|string',
            "short_description" => 'required|string' ,
            "description" => 'required|string',
            "start" => 'required|date',
            "end" => 'required|date',
            "time" => 'required',
            "image" => 'required|image|mimes:jpg,png,jpeg'
        ]);

        #saving Image in public Path
        $img_name = time() . '.' . $this->image->extension();

        //resize Image
        $dest_path = public_path('/assets/images/contests');

        $img = Image::make($this->image->path());

        $img->resize(370, 245 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['image'] = $img_name;

        Contest::create($data);
        session()->flash('message' , 'مسابقه جدید با موفقیت ایجاد شد !!!');

        return redirect()->route('admin.addContest');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-contest-component')->layout('layouts.admin-base');
    }
}
