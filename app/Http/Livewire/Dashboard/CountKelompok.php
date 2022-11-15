<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Group;
use Livewire\Component;

class CountKelompok extends Component
{
    public $total;

    public function mount()
    {
        $this->total = Group::count();
    }

    public function render()
    {
        return view('livewire.dashboard.count-kelompok');
    }
}
