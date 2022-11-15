<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Institution;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartLembaga extends Component
{
    public $series;
    public $labels;

    public function mount()
    {
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.dashboard.chart-lembaga');
    }

    public function loadData()
    {
        $data = DB::table('institutions')
            ->select('leader', DB::raw('count(*) as total'))
            ->groupBy('leader');

        $this->series = $data->pluck('total');
        $this->labels = $data->pluck('leader');

    }
}
