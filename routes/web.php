<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

// Ruta raíz apunta al index de Pokémon
Route::get('/', [PokemonController::class, 'index']);

// Rutas CRUD de Pokémon
Route::resource('pokemons', PokemonController::class);
