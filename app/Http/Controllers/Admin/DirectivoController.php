<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directivo;

class DirectivoController extends Controller
{
    /**
     * Mostrar la lista de materias
     */
    public function index()
    {
        $directivos = Directivo::all();
        return view('admin.directivos.index', compact('directivos'));
    }

    /**
     * Mostrar el formulario para crear una nueva materia
     */
    public function create()
    {
        return view('admin.directivos.create');
    }

    /**
     * Guardar una nueva materia en la base de datos
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre_materia' => 'required|string|max:255',
            'total_alumnos'  => 'required|integer|min:0',
        ]);

        // Crear la materia
        Directivo::create([
            'nombre_materia' => $request->nombre_materia,
            'total_alumnos'  => $request->total_alumnos,
        ]);

        // Alerta de éxito
        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Materia creada correctamente',
            'text'  => 'La materia ha sido registrada exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }

    /**
     * Mostrar el formulario para editar una materia
     */
    public function edit(Directivo $directivo)
    {
        return view('admin.directivos.edit', compact('directivo'));
    }

    /**
     * Actualizar los datos de la materia
     */
    public function update(Request $request, Directivo $directivo)
    {
        $request->validate([
            'nombre_materia' => 'required|string|max:255',
            'total_alumnos'  => 'required|integer|min:0',
        ]);

        // Si no hubo cambios
        if ($directivo->nombre_materia === $request->nombre_materia && $directivo->total_alumnos == $request->total_alumnos) {
            session()->flash('swal', [
                'icon'  => 'info',
                'title' => 'Sin cambios',
                'text'  => 'No se detectaron modificaciones'
            ]);
            return redirect()->route('admin.directivos.edit', $directivo);
        }

        $directivo->update($request->only('nombre_materia', 'total_alumnos'));

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Materia actualizada correctamente',
            'text'  => 'Los datos de la materia fueron actualizados exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }

    /**
     * Eliminar una materia
     */
    public function destroy(Directivo $directivo)
    {
        $directivo->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Materia eliminada correctamente',
            'text'  => 'La materia ha sido eliminada exitosamente'
        ]);

        return redirect()->route('admin.directivos.index');
    }
}

