<x-admin-layout title="Alumnos | Simify"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Alumnos',
        'href' => route('admin.users.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">

<x-wire-card>
    <form action="{{route('admin.users.update', $user)}}" method="POST">
        @csrf
        @method('PUT')

        <x-wire-input label="Nombre" name="name" placeholder="Nombre del alumno" value="{{old('name', $user->name)}}" required>
        </x-wire-input>

        <x-wire-input label="Email" name="email" type="email" placeholder="correo@ejemplo.com" value="{{old('email', $user->email)}}" required>
        </x-wire-input>

        <x-wire-input label="Edad" name="edad" type="number" placeholder="Edad del alumno" value="{{old('edad', $user->edad)}}" min="1" max="100">
        </x-wire-input>

        <x-wire-input label="Calificación" name="calificacion" type="number" step="0.01" placeholder="Calificación (0-100)" value="{{old('calificacion', $user->calificacion)}}" min="0" max="100">
        </x-wire-input>

        <x-wire-input label="Materia" name="materia" placeholder="Materia" value="{{old('materia', $user->materia)}}">
        </x-wire-input>

        <div class="flex justify-end mt-4 gap-2">
            <x-wire-button type="button" href="{{route('admin.users.index')}}">Cancelar</x-wire-button>
            <x-wire-button type="submit" blue>Actualizar</x-wire-button>
        </div>
    </form>
</x-wire-card>

</x-admin-layout>
