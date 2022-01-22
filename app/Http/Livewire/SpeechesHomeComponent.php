<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SpeechesHomeComponent extends Component
{
    public function render()
    {
        return view('livewire.speeches-home-component')->layout('layouts.admin-base');
    }
}
