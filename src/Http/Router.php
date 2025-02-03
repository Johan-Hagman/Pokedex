<?php

declare(strict_types=1);

namespace App\Http;

use App\exceptions\NotFoundHttpException;

class Router
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct(string $uri): string
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new NotFoundHttpException("No route defined for this URI.");
    }
}
