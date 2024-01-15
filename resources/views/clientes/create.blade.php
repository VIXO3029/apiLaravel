
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Crear Cliente</h2>
        <form action="{{ route('clientes.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Cliente</button>
        </form>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver a la lista de clientes</a>
    </div>
@endsection