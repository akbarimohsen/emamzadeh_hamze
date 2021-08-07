<?php

namespace App\Http\Livewire\Admin;

use App\Models\Picture;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPictureComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $image;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $data['image'] = $this->image->store('pictures');

        Picture::create($data);

        session()->flash('message' , 'عکس شما با موفقیت بارگذاری شد !!!');
        redirect()->route('admin.addPicture');
    }
    public function render()
    {
        return view('livewire.admin.add-picture-component')->layout('layouts.admin-base');
    }
}
