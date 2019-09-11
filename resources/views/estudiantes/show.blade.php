@extends('layouts/app')

@section('title', 'Detalles del Estudiante')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Detalles del estudiante</h1>
      <table class="table table-striped">
        <tbody>
            <tr>
              <th>ID</th>
              <td>{{ $estudiante->id }}</td>
            </tr>
            <tr>
              <th>Nombres</th>
              <td>{{ $estudiante->nombres }}</td>
            </tr>
            <tr>
              <th>Apellidos</th>
              <td>{{ $estudiante->apellidos }}</td>
            </tr>
            <tr>
              <th>Sexo</th>
              <td>{{ $estudiante->sexo->tipo }}</td>
            </tr>
            <tr>
              <th>Fecha de Nacimiento</th>
              <td>{{ $estudiante->fecha_de_nacimiento }}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{ $estudiante->email }}</td>
            </tr>
            <tr>
              <th>Carrera</th>
              <td>{{ $estudiante->carrera->nombre }}</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>{{ $estudiante->status->status }}</td>
            </tr>
            <tr>
              <th>Pais</th>
              <td>{{ $estudiante->pais->nombre }}</td>
            </tr>
            <tr>
              <th>Estado</th>
              <td>{{ $estudiante->estado->nombre }}</td>
            </tr>
            <tr>
              <th>Ciudad</th>
              <td>{{ $estudiante->ciudad->nombre }}</td>
            </tr>
            <tr>
              <th>Created At</th>
              <td>{{ $estudiante->created_at }}</td>
            </tr>
            <tr>
              <th>Updated At</th>
              <td>{{ $estudiante->updated_at }}</td>
            </tr>
        </tbody>
      </table>
      <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver</a>
      <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-primary">Editar</a>
    </div>
  </div>
@endsection
