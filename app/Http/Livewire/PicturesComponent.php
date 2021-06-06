<?php

namespace App\Http\Livewire;

use App\Models\Picture;
use Livewire\Component;
use Livewire\WithPagination;

class PicturesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $pictures = Picture::paginate(9);

        return view('livewire.pictures-component',[
            'pictures' => $pictures
        ])->layout('layouts.base');
    }
}
