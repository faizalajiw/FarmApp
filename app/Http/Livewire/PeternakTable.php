<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Breeder;

class PeternakTable extends DataTableComponent
{
    protected $model = Breeder::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Groups id", "groups_id")
                ->sortable(),
            Column::make("Identity number", "identity_number")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Address", "address")
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
