<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Breeder;
use Livewire\Component;

class CountPeternak extends Component
{
    //contoh 3
    public function render()
    {
        return view('livewire.dashboard.count-peternak', [
            'total' => Breeder::count()
        ]);
    }
}
