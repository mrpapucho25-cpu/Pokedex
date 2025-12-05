@extends('layouts.app')

@section('content')

<h2>{{ $pokemon->nombre }}</h2>

<ul class="list-group">
  <li class="list-group-item"><strong>Tipo:</strong> {{ $pokemon->tipo }}</li>
  <li class="list-group-item"><strong>Habilidad:</strong> {{ $pokemon->habilidad }}</li>
  <li class="list-group-item"><strong>Hábitat:</strong> {{ $pokemon->habitat }}</li>
  <li class="list-group-item"><strong>Rareza:</strong> {{ $pokemon->rareza }}</li>
</ul>

<a href="{{ route('pokemons.index') }}" class="btn btn-secondary mt-3">Volver</a>

@endsection