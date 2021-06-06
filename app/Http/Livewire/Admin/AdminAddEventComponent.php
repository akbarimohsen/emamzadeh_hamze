<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class AdminAddEventComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $date_event;
    public $image;

    public function submit()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'date_event' => 'required|date'
        ]);
        $img_name = time() . '.' . $this->image->extension();

        //resize Image
        $dest_path = public_path('/assets/images/events');

        $img = Image::make($this->image->path());

        $img->resize(370, 245 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['image'] = $img_name;

        Event::create($data);
        session()->flash('message' , 'رویداد جدید شما با موفقیت ایجاد شد !!!');

        return redirect()->route('admin.addEvent');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-event-component')->layout('layouts.admin-base');
    }
}
