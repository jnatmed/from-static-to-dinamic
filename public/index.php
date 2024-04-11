<?php 

require __DIR__.'/../src/bootstrap.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;
use Paw\Core\Router;


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$log->info("Peticion a :{$path}");


$router = new Router;

$router->loadRoutes('/', 'PageController@index');
$router->loadRoutes('/about', 'PageController@about');
$router->loadRoutes('/services', 'PageController@services');
$router->loadRoutes('/contact', 'PageController@contact');

$router->direct($path);

$controller = new PageController();

if ($path === '/') {
    $controller->index();
    $log->info("Respuesta Exitosa: 200");
} elseif ($path == '/about') {
    $controller->about();    
    $log->info("Respuesta Exitosa: 200");
} elseif ($path == '/contact') {
    $controller->contact();
    $log->info("Respuesta Exitosa: 200");
} elseif ($path == '/services') {
    $controller->services();    
    $log->info("Respuesta Exitosa: 200");
} else {
    $controller = new ErrorController();
    $controller->notFound();
    $log->info("Path Not Found: 404");
}


