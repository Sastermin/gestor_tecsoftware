<x-admin-layout title="Roles | TecSoftware"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Directivos',
    ]
]">
    <x-slot name="action">
        <x-wire-button blue href="{{ route('admin.directivos.create') }}">
            <i class="fa-solid fa-plus"></i> Nuevo
        </x-wire-button>
    </x-slot>



</x-admin-layout>