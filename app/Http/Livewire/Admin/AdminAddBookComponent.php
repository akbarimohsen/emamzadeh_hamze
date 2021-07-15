<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class AdminAddBookComponent extends Component
{

    use WithFileUploads;

    public $name;
    public $title;
    public $writer;
    public $image;
    public $file;


    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'writer' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            "file" => "required|mimes:pdf|max:10000"
        ]
        );
        $img_name = time() . '.' . $this->image->extension();

        $dest_path = public_path('/assets/images/Books');

        $img = Image::make($this->image->path());

        $img->resize(222, 180 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['image'] = $img_name;

        $data['filename'] = $this->file->store('files', 'public');
        Book::create($data);

        session()->flash('message' , 'کتاب  شما با موفقیت ایجاد شد !!!');
        return redirect()->route('admin.addBook');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-book-component')->layout('layouts.admin-base');
    }
}
