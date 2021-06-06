<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contest;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowContestsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $contests = Contest::withCount('questions')->paginate(10);
        return view('livewire.admin.admin-show-contests-component',[
            'contests' => $contests
        ])->layout('layouts.admin-base');
    }
}
