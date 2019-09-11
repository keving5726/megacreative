<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">MegaCreative</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCarreras" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-book-open"></i> Carreras
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownCarreras">
            <a class="dropdown-item" href="{{ route('carreras.create') }}">Crear</a>
            <a class="dropdown-item" href="{{ route('carreras.index') }}">Listar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEstudiantes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> Estudiantes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownEstudiantes">
            <a class="dropdown-item" href="{{ route('estudiantes.create') }}">Crear</a>
            <a class="dropdown-item" href="{{ route('estudiantes.index') }}">Listar</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
