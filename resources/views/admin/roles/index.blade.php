<x-admin-layout title="Profesores | TecSoftware"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Profesores',
    ]
]">
    <x-slot name="action">
        <x-wire-button blue href="{{ route('admin.roles.create') }}">
            <i class="fa-solid fa-plus"></i> Nuevo Profesor
        </x-wire-button>
    </x-slot>

@livewire('admin.datatables.role-table')

</x-admin-layout>