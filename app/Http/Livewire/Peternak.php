<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Peternak extends Component
{
    public function render()
    {
        return view('livewire.peternak')->layout('layouts.app', ['title' => 'Admin - Peternak']);
    }
}
