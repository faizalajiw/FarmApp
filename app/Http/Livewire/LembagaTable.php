<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Institution;

class LembagaTable extends DataTableComponent
{
    protected $model = Institution::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Image", "image")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Leader", "leader")
                ->sortable()
                ->searchable(),
            Column::make("Address", "address")
                ->sortable()
                ->searchable(),
            Column::make("Phone", "phone")
                ->sortable()
                ->searchable(),
            Column::make("Legal permit", "legal_permit")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    function ($row, Column $column) {
                    $delete = '<button class="btn btn-primary" wire:click="delete(' . $row->id . ')">Hapus</button>';
                    $edit = '<button class="btn btn-success" wire:click="edit(' . $row->id . ')">Edit</button>';
                        return $edit . $delete;
                    }
                )->html(),
        ];
    }
}
