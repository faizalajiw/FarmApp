<?php

namespace App\Http\Livewire;

use App\Models\Cage;
use Livewire\Component;

class Kandang extends Component
{
    public $cage;

    public function mount(){
        $this->cage = Cage::get();
    }
    public function render()
    {
        return view('livewire.kandang')->layout('layouts.app', ['title' => 'Admin - Kandang']);
    }
}
