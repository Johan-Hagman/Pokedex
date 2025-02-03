<?php

declare(strict_types=1);

namespace App;

class Pokemon
{
    public function __construct(public string $name, public int $id) {}

    public function getImageUrl()
    {
        return "https://img.pokemondb.net/sprites/bank/normal/" . str_replace(['♂', '♀', '. ', '’'], ['-m', '-f', '-', ''], strtolower($this->name)) . ".png";
    }
}
