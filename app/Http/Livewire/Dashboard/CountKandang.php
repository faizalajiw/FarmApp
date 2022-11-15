<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Cage;
use Livewire\Component;

class CountKandang extends Component
{
    public $total;

    public function mount()
    {
        $this->total = Cage::count();
    }

    public function render()
    {
        return view('livewire.dashboard.count-kandang');
    }
}
