<?php 

require __DIR__.'/../src/bootstrap.php';

use Paw\Core\Exceptions\RouteNotFoundException;


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$log->info("Peticion a :{$method}{$path}");


try {
    $router->direct($path, $method);
    $log->info("Estatus Code: 200 - {$path}");
} catch (RouteNotFoundException) {
    $router->direct('not-found');
    $log->info("Path not Found: 404", ['Error' => $path]);
} catch (\Exception $e) {
    $router->direct('internal_error');
    $log->error("Status Code: 500 - Internal Server Error", ['Error' => $e]);
}


