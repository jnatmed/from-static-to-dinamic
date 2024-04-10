<?php 

require __DIR__.'/../vendor/autoload.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;
use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;


$whoops = new \Whoops\Run;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log', Level::Debug));

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$log->info("Peticion a :{$path}");

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
    


