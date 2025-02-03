<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use App\Pokemon;

// Hämta alla Pokémon från databasen
$pokemonData = $database
    ->select(['*'])
    ->from('pokemon')
    ->get(); // Hämtar alla Pokémon

// Omvandla varje databasrad till ett `Pokemon`-objekt
$pokemons = array_map(fn($p) => new Pokemon($p->name, $p->id), $pokemonData);

// Skicka vidare till vyn
require view('pokedex');
