<?php

require __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;
use Paw\Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__.'/../');

$dotenv->load();

getenv("LOG_LEVEL");

$whoops = new \Whoops\Run;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(getenv('LOG_PATH'), getenv('LOG_LEVEL')));

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
