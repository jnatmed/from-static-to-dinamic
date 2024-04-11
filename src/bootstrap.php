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

$router->get('/', 'PageController@index');
$router->get('/about', 'PageController@about');
$router->get('/services', 'PageController@services');
$router->get('/contact', 'PageController@contact');
$router->post('/contact', 'PageController@contactProccess');
$router->get('not-found', 'ErrorController@notFound');
$router->get('internal_error', 'ErrorController@internalError');
