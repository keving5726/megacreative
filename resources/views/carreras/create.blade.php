@extends('layouts/app')

@section('title', 'Crear Carrera')

@section('content')
  <div class="row">
    <div class="col">
      <h1 class="text-center">Crear carrera</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="post" action="{{ route('carreras.store') }}">
        @csrf
        <div class="form-group">    
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" maxlength="100" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion:</label>
          <input type="text" class="form-control" name="descripcion" maxlength="180" required>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select name="status" class="form-control">
            @foreach($statuses as $status)
              <option value="{{ $status->id }}">{{ $status->status }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
@endsection
