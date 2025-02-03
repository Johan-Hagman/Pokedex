<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

function view(string $name): string
{
    return __DIR__ . '/../views/' . $name . '.view.php';
}
