<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DashboardSidebarComponent extends Component
{
    public $user;
    public $active_number;

    public function mount($user, $active_number){
        $this->user = $user;
        $this->active_number = $active_number;
    }
    public function render()
    {
        return view('livewire.user.dashboard-sidebar-component');
    }
}
