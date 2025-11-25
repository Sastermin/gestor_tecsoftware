<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DirectivoController extends Controller
{
    /**
     * Mostrar la lista de usuarios
     */
    public function index()
    {
        $directivos = User::all();
        return view('admin.directivos.index', compact('directivos'));
    }

    /**
     * Mostrar el formulario para crear un nuevo usuario
     */
    public function create()
    {
        return view('admin.directivos.create');
    }

    /**
     * Guardar un nuevo usuario en la base de datos
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Crear el usuario
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Alerta de éxito
        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario creado correctamente',
            'text'  => 'El usuario ha sido registrado exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }

    /**
     * Mostrar el formulario para editar un usuario
     */
    public function edit(User $directivo)
    {
        return view('admin.directivos.edit', compact('directivo'));
    }

    /**
     * Actualizar los datos del usuario
     */
    public function update(Request $request, User $directivo)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $directivo->id,
        ]);

        // Si no hubo cambios
        if ($directivo->name === $request->name && $directivo->email === $request->email) {
            session()->flash('swal', [
                'icon'  => 'info',
                'title' => 'Sin cambios',
                'text'  => 'No se detectaron modificaciones'
            ]);
            return redirect()->route('admin.directivos.edit', $directivo);
        }

        $directivo->update($request->only('name', 'email'));

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario actualizado correctamente',
            'text'  => 'Los datos del usuario fueron actualizados exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }

    /**
     * Eliminar un usuario
     */
    public function destroy(User $directivo)
    {
        // Evitar que un administrador se borre a sí mismo
        if (auth()->id() === $directivo->id) {
            session()->flash('swal', [
                'icon'  => 'error',
                'title' => 'Acción no permitida',
                'text'  => 'No puedes eliminar tu propio usuario.'
            ]);
            return redirect()->route('admin.directivos.index');
        }

        $directivo->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario eliminado correctamente',
            'text'  => 'El usuario ha sido eliminado exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }
}

