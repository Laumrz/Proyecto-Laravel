@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear ARL</h1>

        <form action="{{ route('arls.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
