<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EventsComponent extends Component
{
    use WithPagination;
    use AuthorizesRequests;


    public function delete($event_id)
    {
        $event = Event::find($event_id);
        $this->authorize('delete', $event);

        $path = public_path('/assets/images/events') . "/" . $event->image;
        unlink($path);

        $event->delete();

        session()->flash('message', 'رویداد مورد نظر با موفقیت حذف گردید !!!');

    }
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
