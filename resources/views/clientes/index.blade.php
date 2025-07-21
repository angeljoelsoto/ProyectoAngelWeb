@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Cabecera con título y botón de cerrar sesión --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Clientes</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                Cerrar sesión
            </button>
        </form>
    </div>

    {{-- Botón para crear nuevo cliente --}}
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3"> Nuevo Cliente</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('clientes.edit', $cliente->id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Desea eliminar este cliente?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection