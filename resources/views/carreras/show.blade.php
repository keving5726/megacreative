@extends('layouts/app')

@section('title', 'Detalles de la Carrera')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Detalles de la carrera</h1>
      <table class="table table-striped">
        <tbody>
            <tr>
              <th>ID</th>
              <td>{{ $carrera->id }}</td>
            </tr>
            <tr>
              <th>Nombre</th>
              <td>{{ $carrera->nombre }}</td>
            </tr>
            <tr>
              <th>Descripcion</th>
              <td>{{ $carrera->descripcion }}</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>{{ $carrera->status->status }}</td>
            </tr>
          </tbody>
      </table>
      <a href="{{ route('carreras.index') }}" class="btn btn-secondary">Volver</a>
      <a href="{{ route('carreras.edit', $carrera->id) }}" class="btn btn-primary">Editar</a>
    </div>
  </div>
@endsection
