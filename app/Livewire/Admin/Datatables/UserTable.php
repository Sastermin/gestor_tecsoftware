<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    //Se comenta para personalizar la consulta
    //protected $model = User::class;

    //Define el modelo y su consulta
    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return User::query()->with('roles');
    }

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
            Column::make("Edad", "edad")
                ->sortable(),
            Column::make("Calificación", "calificacion")
                ->sortable()
                ->format(function($value) {
                    return $value ? number_format($value, 2) : 'N/A';
                }),
            Column::make("Materia", "materia")
                ->sortable()
                ->searchable(),
            Column::make("Acciones")
                ->label(function ($row) {
                    return view('admin.users.actions',
                        ['user' => $row]);
                }),
        ];
    }
}
