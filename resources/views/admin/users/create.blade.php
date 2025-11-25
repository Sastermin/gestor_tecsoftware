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
        'name' => 'Nuevo',
    ],
]">

<x-wire-card>
    <form action="{{route('admin.users.store')}}" method="POST">
        @csrf

        <x-wire-input label="Nombre" name="name" placeholder="Nombre del alumno" value="{{old('name')}}" required>
        </x-wire-input>

        <x-wire-input label="Email" name="email" type="email" placeholder="correo@ejemplo.com" value="{{old('email')}}" required>
        </x-wire-input>

        <x-wire-input label="Contraseña" name="password" type="password" placeholder="Contraseña" required>
        </x-wire-input>

        <x-wire-input label="Edad" name="edad" type="number" placeholder="Edad del alumno" value="{{old('edad')}}" min="1" max="100">
        </x-wire-input>

        <x-wire-input label="Calificación" name="calificacion" type="number" step="0.01" placeholder="Calificación (0-100)" value="{{old('calificacion')}}" min="0" max="100">
        </x-wire-input>

        <x-wire-input label="Materia" name="materia" placeholder="Materia" value="{{old('materia')}}">
        </x-wire-input>

        <div class="flex justify-end mt-4">
            <x-wire-button type="submit" blue>Guardar</x-wire-button>
        </div>
    </form>
</x-wire-card>

</x-admin-layout>