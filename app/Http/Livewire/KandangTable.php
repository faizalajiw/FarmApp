<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Cage;

class KandangTable extends DataTableComponent
{
    protected $model = Cage::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("No", "id")
                ->sortable(),
            Column::make("Peternakan", "breeders_id")
                ->sortable(),
            Column::make("Location", "location")
                ->sortable(),
            Column::make("Category", "category")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
