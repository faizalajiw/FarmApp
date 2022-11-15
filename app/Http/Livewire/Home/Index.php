<?php

namespace App\Http\Livewire\Home;

use App\Models\Institution;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{

    public $lembaga, $kelompok, $kandang, $hewan;

    public $counter = 0;

    protected $listeners = [
        'updateNumber'
    ];

    protected $rules = [
        'lembaga' => 'required|string|min:5',
        'kelompok' => 'required|string',
        'kandang' => 'required|string',
    ];

    public function mount($id, $string)
    {
        $this->counter = $id .' - '. $string;
        $this->lembaga = Institution::all();
    }

    public function render()
    {
        return view('livewire.home.index')->layoutData(['title' => 'Show Posts']);
    }

    public function changeText()
    {
        $this->counter++;
    }

    public function updateNumber()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->counter++;
    }

    public function updatedLembaga()
    {
        $this->validateOnly('lembaga');
    }

    public function submit()
    {
        $this->validate();



        dd('awdad');
    }

}
