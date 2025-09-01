@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Inventario de Productos</h4>
                    <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar nuevo producto</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>₡{{ number_format($producto->precio_venta, 2) }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td>
                                        <a href="{{ route('productos.show', $producto) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar este producto?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection