<!-- Vista para el formulario de creación de clientes -->
@extends('layouts.app')

@section('content')
    <h2>Crear Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required>
        <br>
        <button type="submit">Crear Cliente</button>
    </form>
    <br>
    <a href="{{ route('clientes.index') }}">Volver a la lista de clientes</a>
@endsection

