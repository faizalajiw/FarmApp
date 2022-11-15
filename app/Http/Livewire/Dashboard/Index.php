<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index')->layout('layouts.app', ['title' => 'Admin - Dashboard']);
    }
}
