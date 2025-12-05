@extends('layouts.app')

@section('content')

<h2>Editar Pokémon</h2>

<form action="{{ route('pokemons.update', $pokemon) }}" method="POST">
  @csrf
  @method('PUT')

  @include('pokemons.form')

  <button class="btn btn-warning">Actualizar</button>
  <a href="{{ route('pokemons.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection