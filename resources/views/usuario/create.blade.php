@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Agregar Usuario</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
