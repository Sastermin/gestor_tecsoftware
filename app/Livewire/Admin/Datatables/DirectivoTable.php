<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Directivo;

class DirectivoTable extends DataTableComponent
{
    protected $model = Directivo::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),

            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),

            Column::make("Fecha", "updated_at")
                ->sortable()
                ->format(fn($value) => $value?->format('d/m/Y')),

            Column::make("Acciones")
                ->label(fn($row) => view('admin.directivos.actions', [
                    'role' => $row,
                ])),
        ];
    }
}