<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideoesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $videos = Video::paginate(10);
        return view('livewire.videoes-component',[
            'videos' => $videos
        ])->layout('layouts.base');
    }
}
