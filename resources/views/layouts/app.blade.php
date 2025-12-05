<!DOCTYPE html>
<html>

<head>
  <title>Pokémon CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Botones rojos estilo Pokéball */
    .btn-pokeball {
      background-color: #EE1515;
      color: #fff;
      border: 1px solid #EE1515;
    }

    .btn-pokeball:hover {
      background-color: #cc1212;
      /* rojo más oscuro al pasar el mouse */
      color: #fff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #EE1515;">
    <div class="container">
      <a class="navbar-brand" href="{{ route('pokemons.index') }}">
        Pokémon CRUD
      </a>
    </div>
  </nav>

  <div class="container mt-4">
    @yield('content')
  </div>
</body>

</html>