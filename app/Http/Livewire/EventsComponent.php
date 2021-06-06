<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;
use Hekmatinasser\Verta\Facades\Verta;

class EventsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $events = Event::paginate(3);
        return view('livewire.events-component',[
            'events' => $events
        ])->layout('layouts.base');
    }
}
