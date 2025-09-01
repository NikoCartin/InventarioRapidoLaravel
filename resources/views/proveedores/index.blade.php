@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Lista de Proveedores</h2>
    <a href="{{ route('proveedores.create') }}" class="btn btn-success mb-3">Agregar Proveedor</a>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id_proveedor }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id_proveedor) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $proveedores->links() }}
</div>
@endsection