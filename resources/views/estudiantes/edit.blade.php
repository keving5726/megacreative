@extends('layouts/app')

@section('title', 'Editar Estudiante')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Editar estudiante</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="post" action="{{ route('estudiantes.update', $estudiante->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">    
          <label for="nombres">Nombres:</label>
          <input type="text" class="form-control" name="nombres" value="{{ $estudiante->nombres }}" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" name="apellidos" value="{{ $estudiante->apellidos }}" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="status">Sexo:</label>
          <select name="sexo" class="form-control">
            @foreach($sexos as $sexo)
              @if ($sexo->id === $estudiante->sexo_id)
                <option value="{{ $sexo->id }}" selected="selected">{{ $sexo->tipo }}</option>
              @else
                <option value="{{ $sexo->id }}">{{ $sexo->tipo }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
          <input type="date" class="form-control" name="fecha_de_nacimiento" value="{{ $estudiante->fecha_de_nacimiento }}"required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" value="{{ $estudiante->email }}"maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="carrera">Carrera:</label>
          <select name="carrera" class="form-control">
            @foreach($carreras as $carrera)
              @if ($carrera->id === $estudiante->carrera_id)
                <option value="{{ $carrera->id }}" selected="selected">{{ $carrera->nombre }}</option>
              @else
                <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select name="status" class="form-control">
            @foreach($statuses as $status)
              @if ($status->id === $estudiante->status_id)
                <option value="{{ $status->id }}" selected="selected">{{ $status->status }}</option>
              @else
                <option value="{{ $status->id }}">{{ $status->status }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="pais">Pais:</label>
          <select name="pais" class="form-control">
            @foreach($paises as $pais)
              @if ($pais->id === $estudiante->pais_id)
                <option value="{{ $pais->id }}" selected="selected">{{ $pais->nombre }}</option>
              @else
                <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="estado">Estado:</label>
          <select name="estado" class="form-control">
            @foreach($estados as $estado)
              @if ($estado->id === $estudiante->estado_id)
                <option value="{{ $estado->id }}" selected="selected">{{ $estado->nombre }}</option>
              @else
                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="ciudad">Ciudad:</label>
          <select name="ciudad" class="form-control">
            @foreach($ciudades as $ciudad)
              @if ($ciudad->id === $estudiante->ciudad_id)
                <option value="{{ $ciudad->id }}" selected="selected">{{ $ciudad->nombre }}</option>
              @else
                <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
@endsection
