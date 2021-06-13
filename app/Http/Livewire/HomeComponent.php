<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $events = Event::orderBy('created_at','desc')->take(3)->get();
        return view('livewire.home-component',[
            "events" => $events
        ])->layout('layouts.base');
    }
}
