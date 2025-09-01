@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalle del Producto</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
                        <li class="list-group-item"><strong>Precio:</strong> ₡{{ number_format($producto->precio_venta, 2) }}</li>
                        <li class="list-group-item"><strong>Stock:</strong> {{ $producto->stock }}</li>
                    </ul>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection