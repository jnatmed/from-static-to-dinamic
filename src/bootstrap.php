<?php

require __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;
use Paw\Core\Router;

$whoops = new \Whoops\Run;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log', Level::Debug));

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();

$router = new Router;

$router->loadRoutes('/', 'PageController@index');
$router->loadRoutes('/about', 'PageController@about');
$router->loadRoutes('/services', 'PageController@services');
$router->loadRoutes('/contact', 'PageController@contact');
$router->loadRoutes('not-found', 'ErrorController@notFound');
$router->loadRoutes('internal_error', 'ErrorController@internalError');
