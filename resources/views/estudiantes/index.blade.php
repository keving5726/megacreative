@extends('layouts/app')

@section('title', 'Estudiantes')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Estudiantes</h1>
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Carrera</th>
            <th>Status</th>
            <th colspan=2>Acciones</td>
          </tr>
        </thead>
        <tbody>
          @foreach($estudiantes as $estudiante)
            <tr>
              <td>{{ $estudiante->nombres }}</td>
              <td>{{ $estudiante->apellidos }}</td>
              <td>{{ $estudiante->email }}</td>
              <td>{{ $estudiante->carrera->nombre }}</td>
              <td>{{ $estudiante->status->status }}</td>
              <td>
                <a href="{{ route('estudiantes.show',$estudiante->id) }}" class="btn btn-primary">Mostrar</a>
              </td>
              <td>
                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
