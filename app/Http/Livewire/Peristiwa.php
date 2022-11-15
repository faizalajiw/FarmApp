<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Peristiwa extends Component
{
    public function render()
    {
        return view('livewire.peristiwa')->layout('layouts.app', ['title' => 'Admin Peristiwa']);
    }
}
