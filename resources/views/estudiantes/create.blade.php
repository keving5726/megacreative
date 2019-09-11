@extends('layouts/app')

@section('title', 'Crear Estudiante')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Crear estudiante</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="post" action="{{ route('estudiantes.store') }}">
        @csrf
        <div class="form-group">    
          <label for="nombres">Nombres:</label>
          <input type="text" class="form-control" name="nombres" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" name="apellidos" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="sexo">Sexo:</label>
          <select name="sexo" class="form-control">
            @foreach($sexos as $sexo)
              <option value="{{ $sexo->id }}">{{ $sexo->tipo }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
          <input type="date" class="form-control" name="fecha_de_nacimiento" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="carrera">Carrera:</label>
          <select name="carrera" class="form-control">
            @foreach($carreras as $carrera)
              <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select name="status" class="form-control">
            @foreach($statuses as $status)
              <option value="{{ $status->id }}">{{ $status->status }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="pais">Pais:</label>
          <select name="pais" class="form-control">
            @foreach($paises as $pais)
              <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="estado">Estado:</label>
          <select name="estado" class="form-control">
            @foreach($estados as $estado)
              <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="ciudad">Ciudad:</label>
          <select name="ciudad" class="form-control">
            @foreach($ciudades as $ciudad)
              <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
@endsection
