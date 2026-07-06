<?php

use App\Core\Database;
use App\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

//retorna um objeto pdo
Database::connect();

$router = new Router();

$router->dispatch();

