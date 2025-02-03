<?php

declare(strict_types=1);

namespace tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{
    public function test_create_pokemon()
    {
        $pokemon = new Pokemon("Charizard", 6);
        $this->assertSame("Charizard", $pokemon->name);
        $this->assertSame(6, $pokemon->id);
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/charizard.png", $pokemon->getImageUrl());
    }
}
