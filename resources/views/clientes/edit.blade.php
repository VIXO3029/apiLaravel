<!-- Vista para el formulario de edición de clientes -->
@extends('layouts.app')

@section('content')
    <h2>Editar Cliente</h2>
    <form action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{ $cliente->apellidos }}" required>
        <br>
        <button type="submit">Actualizar Cliente</button>
    </form>
    <br>
    <a href="{{ route('clientes.index') }}">Volver a la lista de clientes</a>
@endsection
