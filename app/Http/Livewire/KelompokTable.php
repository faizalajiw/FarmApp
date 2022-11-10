<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Group;

class KelompokTable extends DataTableComponent
{
    protected $model = Group::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Institutions id", "institutions_id")
                ->sortable(),
            Column::make("Image", "image")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Leader", "leader")
                ->sortable(),
            Column::make("Address", "address")
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Legal permit", "legal_permit")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
