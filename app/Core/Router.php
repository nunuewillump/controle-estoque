<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function __construct()
    {
        $this->routes = require __DIR__ . '/../../routes/web.php';
    }

    private function routeExists(string $uri): bool
    {
        return array_key_exists($uri, $this->routes);
    }

    public function dispatch()
    {
        $uri = $this->getCurrentUri();

        $uri = $this->normalizeUri($uri);

        if (!$this->routeExists($uri)) {
            http_response_code(404);
            echo "404 - Página não encontrada";
            return;
        }

        $route = $this->routes[$uri];

        $controller = $route[0];

        $method = $route[1];

        $instance = new $controller();
        
        $instance->$method();
    }

    private function getCurrentUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    private function normalizeUri(string $uri): string
    {
        return str_replace('/controle-estoque/public', '', $uri);
    }
}