<!-- Vista para mostrar la lista de clientes -->
@extends('layouts.app')

@section('content')
    <h2>Lista de Clientes</h2>
    <ul>
        @foreach($clientes as $cliente)
            <li>{{ $cliente->id }} - {{ $cliente->nombre }} {{ $cliente->apellidos }}</li>
        @endforeach
    </ul>
    <a href="{{ route('clientes.create') }}">Agregar Cliente</a>
@endsection
