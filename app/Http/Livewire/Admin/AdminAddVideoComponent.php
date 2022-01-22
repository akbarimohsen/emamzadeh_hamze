<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Video;
use Livewire\Component;

class AdminAddVideoComponent extends Component
{
    public $iframe;
    public $name;
    public $description;
    public $category_id;
    public $is_speech;
    public $day_of_speech;


    public function submit()
    {
        $data = $this->validate([
            'iframe' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'is_speech' => 'required'
        ]);

        if($this->is_speech == 1)
        {
            $data['day_of_speech'] = $this->day_of_speech;
        }

        Video::create($data);

        session()->flash('message' , 'ویدیو شما با موفقیت ایجاد شد !!!');

        return redirect()->route('admin.addVideo');
    }
    public function render()
    {

        $categories = Category::where('title', 'video')->get();
        return view('livewire.admin.admin-add-video-component',[
            'categories' => $categories
        ])->layout('layouts.admin-base');
    }
}
