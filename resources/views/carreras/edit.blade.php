@extends('layouts/app')

@section('title', 'Editar Carrera')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Editar carrera</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="post" action="{{ route('carreras.update', $carrera->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">    
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" value="{{ $carrera->nombre }}" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion:</label>
          <input type="text" class="form-control" name="descripcion" value="{{ $carrera->descripcion }}" maxlength="180" required>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select name="status" class="form-control">
            @foreach($statuses as $status)
              @if ($status->id === $carrera->status_id)
                <option value="{{ $status->id }}" selected="selected">{{ $status->status }}</option>
              @else
                <option value="{{ $status->id }}">{{ $status->status }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <a href="{{ route('carreras.show', $carrera->id) }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
@endsection
