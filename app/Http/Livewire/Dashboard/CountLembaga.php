<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Institution;
use Livewire\Component;

class CountLembaga extends Component
{
    public $title = 'Lembaga';
    public $total;

    public function mount(){
        $this->total = Institution::count();
    }

    public function render()
    {
        return view('livewire.dashboard.count-lembaga');
    }
}
