<?php

namespace Paw\Core;

Class Router {

    public array $routes;

    public function loadRoutes($path, $action) 
    {
        $this->routes[$path] = $action;
    }

    public function direct($path)
    {
        list($controller, $method) = explode('@', $this->routes[$path]);
        $controller = "Paw\\App\\Controllers\\{$controller}";
        $objController =  new $controller;
        $objController->$method();
    }
}