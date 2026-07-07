<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\CategoriaModel;

class CategoriaController
{
    public function index()
    {
        $model = new CategoriaModel();

        $categorias = $model->all();

        View::render('categoria/index', [
            'categorias' => $categorias
        ]);
    }
}