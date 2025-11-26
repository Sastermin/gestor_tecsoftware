<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar que se cree bien
        $request->validate(['name' => 'required|unique:roles,name']);

        //Si pasa la validacion, creara el rol
        $role = Role::create(['name' => $request->name]);

        //Variable de un solo uso para alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Profesor creado correctamente',
            'text' => 'El profesor ha sido creado exitosamente'
        ]);

        //Redireccionara a la tabla principal
        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        //Validar que se cree bien
        $request->validate(['name' => 'required|unique:roles,name,'.$role->id]);

        //Si el campo no cambio, no actualices
        if($role->name === $request->name){
            session()->flash('swal',
            [
                'icon' => 'info',
                'title' => 'Sin cambios',
                'text' => 'No se detectaron modificaciones'
            ]);

            return redirect()->route('admin.roles.edit', $role);
        }

        //Actualizar rol
        $role->update(['name' => $request->name]);

        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Profesor actualizado correctamente',
            'text' => 'El profesor ha sido actualizado exitosamente'
        ]);

        return redirect()->route('admin.roles.index', $role);
    }

    /**
     * Delete role
     */
    public function destroy(Role $role)
    {
        // Borrar el elemento sin restricciones
        $role->delete();

        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol eliminado correctamente',
            'text' => 'El profesorha sido eliminado exitosamente'
        ]);

        return redirect()->route('admin.roles.index');
    }
}
