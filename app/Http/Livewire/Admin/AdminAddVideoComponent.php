<?php

namespace App\Http\Livewire\Admin;

use App\Models\Video;
use Livewire\Component;

class AdminAddVideoComponent extends Component
{
    public $iframe;

    public function submit()
    {
        $data = $this->validate([
            'iframe' => 'required|string'
        ]);

        Video::create($data);

        session()->flash('message' , 'ویدیو شما با موفقیت ایجاد شد !!!');

        return redirect()->route('admin.addVideo');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-video-component')->layout('layouts.admin-base');
    }
}
