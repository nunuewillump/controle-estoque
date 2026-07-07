<?php

use App\Controllers\HomeController;
use App\Controllers\CategoriaController;

return [
    '/' => [HomeController::class, 'index'],
    '/categorias' => [CategoriaController::class, 'index'],
];