<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // 👈 usamos el modelo User

class UserController extends Controller
{
    /**
     * Mostrar la lista de usuarios
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Mostrar el formulario para crear un nuevo usuario
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Guardar un nuevo usuario en la base de datos
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:6',
            'edad'         => 'nullable|integer|min:1|max:100',
            'calificacion' => 'nullable|numeric|min:0|max:100',
            'materia'      => 'nullable|string|max:255',
        ]);

        // Crear el usuario
        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => bcrypt($request->password),
            'edad'         => $request->edad,
            'calificacion' => $request->calificacion,
            'materia'      => $request->materia,
        ]);

        // Alerta de éxito
        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Alumno creado correctamente',
            'text'  => 'El alumno ha sido registrado exitosamente'
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Mostrar el formulario para editar un usuario
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Actualizar los datos del usuario
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email,' . $user->id,
            'edad'         => 'nullable|integer|min:1|max:100',
            'calificacion' => 'nullable|numeric|min:0|max:100',
            'materia'      => 'nullable|string|max:255',
        ]);

        $user->update($request->only('name', 'email', 'edad', 'calificacion', 'materia'));

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Alumno actualizado correctamente',
            'text'  => 'Los datos del alumno fueron actualizados exitosamente'
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Eliminar un usuario
     */
    public function destroy(User $user)
    {
        // Evitar que un administrador se borre a sí mismo
        if (auth()->id() === $user->id) {
            session()->flash('swal', [
                'icon'  => 'error',
                'title' => 'Acción no permitida',
                'text'  => 'No puedes eliminar tu propio usuario.'
            ]);
            return redirect()->route('admin.users.index');
        }

        $user->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Alumno eliminado correctamente',
            'text'  => 'El alumno ha sido eliminado exitosamente'
        ]);

        return redirect()->route('admin.users.index');
    }
}

