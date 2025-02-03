<?php

declare(strict_types=1);

use App\Http\Router;
use PHPUnit\Framework\TestCase;
use App\Exceptions\NotFoundHttpException;

class RouterTest extends  TestCase
{
    public function test_route_request()
    {
        $testArray = [
            '/' => __DIR__ . '/controllers/pokedex.php',
            '/pokemon' => __DIR__ . '/controllers/pokemon.php'
        ];
        $request = new Router($testArray);

        $this->assertSame(__DIR__ . '/controllers/pokedex.php', $request->direct('/'));
    }

    public function test_route_not_found()
    {

        $testArray = [
            '/' => __DIR__ . '/controllers/pokedex.php',
            '/pokemon' => __DIR__ . '/controllers/pokemon.php'
        ];

        $this->expectException(APP\exceptions\NotFoundHttpException::class);
        $this->expectExceptionMessage('No route defined for this URI.');

        $request = new Router($testArray);

        $request->direct('/controll/pokedex.php');
    }
}
