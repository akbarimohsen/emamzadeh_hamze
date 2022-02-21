<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;

class Error404Component extends Component
{
    public function render()
    {
        return view('livewire.education.error404-component')->layout('layouts.education-base');
    }
}
