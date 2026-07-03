<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Database;

//retorna um objeto pdo
$pdo = Database::connect();

echo "sistema funcionando";
