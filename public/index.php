<?php 

require __DIR__.'/../vendor/autoload.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;

$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new PageController();

if ($path === '/') {
    $controller->index();
} elseif ($path == '/about') {
    $controller->about();    
} elseif ($path == '/contact') {
    $controller->contact();
} elseif ($path == '/services') {
    $controller->services();    
} else {
    $controller = new ErrorController();
    $controller->notFound();
}
    


