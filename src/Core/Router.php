<?php

namespace Paw\Core;

use Paw\Core\Exceptions\RouteNotFoundException;

Class Router {

    public array $routes;

    public function loadRoutes($path, $action) 
    {
        $this->routes[$path] = $action;
    }

    public function direct($path)
    {
        if(!array_key_exists($path, $this->routes)){
            throw new RouteNotFoundException("No existe ruta para este Path");
        }
        list($controller, $method) = explode('@', $this->routes[$path]);
        $controller = "Paw\\App\\Controllers\\{$controller}";
        $objController =  new $controller;
        $objController->$method();
    }
}