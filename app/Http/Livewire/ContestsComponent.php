<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use Livewire\Component;
use Livewire\WithPagination;

class ContestsComponent extends Component
{
    use WithPagination;
    public function render()
    {

        $contests = Contest::paginate(9);
        return view('livewire.contests-component',[
            'contests' => $contests
        ])->layout('layouts.base');
    }
}
