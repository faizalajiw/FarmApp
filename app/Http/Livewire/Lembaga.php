<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lembaga extends Component
{
    public function render()
    {
        return view('livewire.lembaga')->layout('layouts.app', ['title' => 'Admin - Lembaga']);
    }
}
