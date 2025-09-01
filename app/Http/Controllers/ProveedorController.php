<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    // Listar proveedores con paginación
    public function index()
    {
        $proveedores = Proveedor::paginate(10);
        // Retorna la vista 'proveedores.index' con los proveedores paginados
        return view('proveedores.index', compact('proveedores'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('proveedores.create');
    }

    // Guardar proveedor en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'telefono' => 'required|string|max:50',
            'correo'   => 'required|email|max:255',
        ]);

        Proveedor::create($request->only(['nombre', 'telefono', 'correo']));

        return redirect()->route('proveedores.index')
            ->with('success', 'Proveedor creado correctamente.');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    // Actualizar proveedor en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'telefono' => 'required|string|max:50',
            'correo'   => 'required|email|max:255',
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->only(['nombre', 'telefono', 'correo']));

        return redirect()->route('proveedores.index')
            ->with('success', 'Proveedor actualizado correctamente.');
    }

    // Eliminar proveedor
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedores.index')
        ->with('success', 'Proveedor actualizado correctamente.');
    }
}