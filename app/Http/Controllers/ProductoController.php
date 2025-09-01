<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    // Listar productos con paginación
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos.index', compact('productos'));
    }

    // Mostrar formulario de creación de producto
    public function create()
    {
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.create', compact('categorias', 'proveedores'));
    }

    // Guardar producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|string|max:255',
            'descripcion'   => 'nullable|string',
            'precio_compra' => 'required|numeric|min:0',
            'precio_venta'  => 'required|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'id_categoria'  => 'required|exists:categorias,id_categoria',
            'id_proveedor'  => 'required|exists:proveedores,id_proveedor',
        ]);

        $producto = Producto::create([
            'nombre'         => $request->nombre,
            'descripcion'    => $request->descripcion,
            'precio_compra'  => $request->precio_compra,
            'precio_venta'   => $request->precio_venta,
            'stock'          => $request->stock,
            'id_categoria'   => $request->id_categoria,
            'id_proveedor'   => $request->id_proveedor,
        ]);

        return redirect()->route('productos.show', $producto)
            ->with('success', ('Producto creado correctamente.'));
    }

    // Mostrar detalles de un producto
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    // Mostrar formulario de edición de producto
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.edit', compact('producto', 'categorias', 'proveedores'));
    }

    // Actualizar producto en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'        => 'required|string|max:255',
            'descripcion'   => 'nullable|string',
            'precio_compra' => 'required|numeric|min:0',
            'precio_venta'  => 'required|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'id_categoria'  => 'required|exists:categorias,id_categoria',
            'id_proveedor'  => 'required|exists:proveedores,id_proveedor',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update([
            'nombre'         => $request->nombre,
            'descripcion'    => $request->descripcion,
            'precio_compra'  => $request->precio_compra,
            'precio_venta'   => $request->precio_venta,
            'stock'          => $request->stock,
            'id_categoria'   => $request->id_categoria,
            'id_proveedor'   => $request->id_proveedor,
        ]);

        return redirect()->route('productos.show', $producto)
            ->with('success', ('Producto actualizado correctamente.'));
    }

    // Eliminar producto
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', ('Producto eliminado correctamente.'));
    }
}