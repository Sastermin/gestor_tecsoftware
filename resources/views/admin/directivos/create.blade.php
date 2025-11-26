<x-admin-layout title="Materias | TecSoftware"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Materias',
        'href' => route('admin.directivos.index'),
    ],
    [
        'name' => 'Nueva',
    ],
]">

<x-wire-card>
    <form action="{{route('admin.directivos.store')}}" method="POST">
        @csrf

        <x-wire-input label="Nombre de la materia" name="nombre_materia" placeholder="Ej: Matemáticas" value="{{old('nombre_materia')}}">
        </x-wire-input>

        <x-wire-input label="Total de alumnos" name="total_alumnos" type="number" min="0" placeholder="0" value="{{old('total_alumnos')}}">
        </x-wire-input>

        <div class="flex justify-end mt-4">
            <x-wire-button type="submit" blue>Guardar</x-wire-button>
        </div>
    </form>
</x-wire-card>

</x-admin-layout>