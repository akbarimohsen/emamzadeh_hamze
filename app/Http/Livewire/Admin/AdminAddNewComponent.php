<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use App\Models\News;

class AdminAddNewComponent extends Component
{

    public $title;
    public $description;
    public $image;

    use WithFileUploads;

    public function submit()
    {
        $data = $this->validate([
            "title" => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg'
            ]);

        $img_name = time() . '.' . $this->image->extension();

        //resize Image
        $dest_path1 = public_path('/assets/images/News');
        $dest_path2 = public_path('/assets/images/News/home');


        $img1 = Image::make($this->image->path());
        $img2 = Image::make($this->image->path());

        $img1->resize(500 , 270 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path1 . '/' . $img_name);

        $img2->resize(222, 180 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path2 . '/' . $img_name);

        $data['image'] = $img_name;

        News::create($data);

        session()->flash('message' , 'خبر شما با موفقیت ایجاد شد !!!');
        return redirect()->route('admin.addNews');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-new-component')->layout('layouts.admin-base');
    }
}
