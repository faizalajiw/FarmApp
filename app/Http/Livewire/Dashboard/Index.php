<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Breeder;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index')->layout('layouts.app', ['title' => 'Admin - Dashboard']);
    }

    public function moveCage($from_cage, $to_cage, $breeder_id)
    {
        //ambil breeder
        $breeder = Breeder::where('id', $breeder_id)->update([
            'cage_id' => $to_cage
        ]);

        //catat peristiwa
        $peristiwa = Peristiwa::create([
           'breeder_id' => $breeder->id,
           'from_cage' => $from_cage,
           'to_cage' => $to_cage,
           'notes' => 'Habis pindah kandang',
        ]);

        //hitung perpindahan
        $count = Peristiwa::where('breeder_id', $breeder_id)->count();

        return [
            'status' => true,
            'message' => 'Berhasil memindahkan breeder',
            'data' => $count,
        ];
    }

    public function submit()
    {
        $this->validate();

        //kumpulin data
        $data = [
            'data' => $this->data,
        ];

        //logic
        $model = Model::create($data);


        session()->flash('success', 'Berhasil input data');
        return redirect()->route('kemna');
    }
}
