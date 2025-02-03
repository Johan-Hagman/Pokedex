<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use App\Database\Connection;
use App\Database\QueryBuilder;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$database = new QueryBuilder(
    Connection::make(
        $_ENV['DB_DRIVER'] ?? 'mysql',
        $_ENV['DB_HOST'] ?? 'localhost',
        $_ENV['DB_NAME'] ?? '',
        $_ENV['DB_USERNAME'] ?? '',
        $_ENV['DB_PASSWORD'] ?? ''
    )
);
