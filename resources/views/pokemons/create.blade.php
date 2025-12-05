@extends('layouts.app')

@section('content')

<h2>Nuevo Pokémon</h2>

<form action="{{ route('pokemons.store') }}" method="POST">
  @csrf

  @include('pokemons.form')

  <button class="btn btn-primary">Guardar</button>
  <a href="{{ route('pokemons.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection