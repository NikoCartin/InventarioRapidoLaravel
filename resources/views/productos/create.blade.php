@extends('layouts.app')

@section('content')
<h2>Crear Producto</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('productos.store') }}" method="POST" autocomplete="off">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" maxlength="255" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="precio_compra" class="form-label">Precio de Compra</label>
        <input type="number" name="precio_compra" id="precio_compra" class="form-control" value="{{ old('precio_compra') }}" required step="0.01" min="0">
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio de Venta</label>
        <input type="number" name="precio_venta" id="precio_venta" class="form-control" value="{{ old('precio_venta') }}" required step="0.01" min="0">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Cantidad en Stock</label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required min="0">
    </div>
    <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoría</label>
        <select name="id_categoria" id="id_categoria" class="form-control" required>
            <option value="">Seleccione una categoría</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id_categoria }}" {{ old('id_categoria') == $categoria->id_categoria ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_proveedor" class="form-label">Proveedor</label>
        <select name="id_proveedor" id="id_proveedor" class="form-control" required>
            <option value="">Seleccione un proveedor</option>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id_proveedor }}" {{ old('id_proveedor') == $proveedor->id_proveedor ? 'selected' : '' }}>
                    {{ $proveedor->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection