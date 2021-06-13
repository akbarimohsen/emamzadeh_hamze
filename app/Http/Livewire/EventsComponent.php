<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Hekmatinasser\Verta\Facades\Verta;

class EventsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $events = Event::paginate(3);
        $now = Carbon::now()->toDateTimeString();
        $last_events = Event::where('date_event' , '<' , $now)->take(8)->get();
        return view('livewire.events-component',[
            'events' => $events,
            'last_events' => $last_events
        ])->layout('layouts.base');
    }
}
