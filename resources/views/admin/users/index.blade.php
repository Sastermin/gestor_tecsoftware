<x-admin-layout title="Alumnos | Simify"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Alumnos',
    ]
]">
    <x-slot name="action">
        <x-wire-button blue href="{{ route('admin.users.create') }}">
            <i class="fa-solid fa-plus"></i> Nuevo Alumno
        </x-wire-button>
    </x-slot>

    @livewire('admin.datatables.user-table')

</x-admin-layout>