@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar Empleado</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido }}</td>
                        <td>{{ $empleado->email }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>
                            <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline-block;">
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
