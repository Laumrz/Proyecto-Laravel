@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista ARL</h1>
        <a href="{{ route('arls.create') }}" class="btn btn-primary">Agregar ARL</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arls as $arl)
                    <tr>
                        <td>{{ $arl->nombre }}</td>
                        <td>{{ $arl->descripcion }}</td>
                        <td>
                            <a href="{{ route('arls.show', $arl->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('arls.edit', $arl->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('arls.destroy', $arl->id) }}" method="POST" style="display:inline-block;">
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
