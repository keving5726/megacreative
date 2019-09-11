@extends('layouts/app')

@section('title', 'Carreras')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Carreras</h1>
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Status</th>
            <th colspan=2>Acciones</td>
          </tr>
        </thead>
        <tbody>
          @foreach($carreras as $carrera)
            <tr>
              <td>{{ $carrera->nombre }}</td>
              <td>{{ $carrera->descripcion }}</td>
              <td>{{ $carrera->status->status }}</td>
              <td>
                <a href="{{ route('carreras.show',$carrera->id) }}" class="btn btn-primary">Mostrar</a>
              </td>
              <td>
                <form action="{{ route('carreras.destroy', $carrera->id) }}" method="post">
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
