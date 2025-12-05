<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
  public function index()
  {
    $pokemons = Pokemon::all();
    return view('pokemons.index', compact('pokemons'));
  }

  public function create()
  {
    return view('pokemons.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nombre' => 'required',
      'tipo' => 'required',
      'habilidad' => 'required',
      'habitat' => 'required',
      'rareza' => 'required',
    ]);

    Pokemon::create($request->all());

    return redirect()->route('pokemons.index')
      ->with('success', 'Pokémon agregado correctamente.');
  }

  public function show(Pokemon $pokemon)
  {
    return view('pokemons.show', compact('pokemon'));
  }

  public function edit(Pokemon $pokemon)
  {
    return view('pokemons.edit', compact('pokemon'));
  }

  public function update(Request $request, Pokemon $pokemon)
  {
    $pokemon->update($request->all());

    return redirect()->route('pokemons.index')
      ->with('success', 'Pokémon actualizado.');
  }

  public function destroy(Pokemon $pokemon)
  {
    $pokemon->delete();

    return redirect()->route('pokemons.index')
      ->with('success', 'Pokémon eliminado.');
  }
}
