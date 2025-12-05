@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
  <h2>Pokémon</h2>
  <a href="{{ route('pokemons.create') }}" class="btn btn-primary">Nuevo Pokémon</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-bordered">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Habilidad</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($pokemons as $pokemon)
    <tr>
      <td>{{ $pokemon->id }}</td>
      <td>{{ $pokemon->nombre }}</td>
      <td>{{ $pokemon->tipo }}</td>
      <td>{{ $pokemon->habilidad }}</td>
      <td>
        <a href="{{ route('pokemons.show', $pokemon) }}" class="btn btn-success btn-sm">Ver</a>
        <a href="{{ route('pokemons.edit', $pokemon) }}" class="btn btn-warning btn-sm">Editar</a>

        <form action="{{ route('pokemons.destroy', $pokemon) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection