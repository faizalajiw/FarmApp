<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Kelompok extends Component
{
    public function render()
    {
        return view('livewire.kelompok')->layout('layouts.app', ['title' => 'Admin - Kelompok']);
    }
}
