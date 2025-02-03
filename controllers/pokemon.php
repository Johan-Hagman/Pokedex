<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use App\Pokemon;
use App\Exceptions\NotFoundHttpException;

$id = $_GET['id'] ?? null;
$id = (int) $id;

if (!$id) {
    throw new NotFoundHttpException("Pokémon ID saknas.");
}

// Hämta en specifik Pokémon från databasen
$pokemonData = $database
    ->select(['id', 'name'])
    ->from('pokemon')
    ->where('id', '=', $id)
    ->first(); // Hämtar en enskild Pokémon

if (!$pokemonData) {
    throw new NotFoundHttpException("Pokémon hittades inte.");
}

// Skapa ett Pokemon-objekt
$pokemon = new Pokemon($pokemonData->name, $pokemonData->id);

// Skicka vidare till vyn
require view('pokemon');
