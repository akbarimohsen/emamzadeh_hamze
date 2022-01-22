<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class VideoPageComponent extends Component
{
    public $video_id;

    public function mount($id)
    {
        $this->video_id = $id;
    }


    public function render()
    {
        $video = Video::find($this->video_id);
        return view('livewire.video-page-component',[
            'video' => $video
        ])->layout('layouts.base');
    }
}
