<?php 

require __DIR__.'/../src/bootstrap.php';

// use Paw\Core\Exceptions\RouteNotFoundException;

$router->direct($request);

// try {
//     $router->direct($request);
//     $log->info("Estatus Code: 200 - {$path}");
// } catch (RouteNotFoundException) {
//     $router->direct('not-found');
//     $log->info("Path not Found: 404", ['Error' => $path]);
// } catch (\Exception $e) {
//     $router->direct('internal_error');
//     $log->error("Status Code: 500 - Internal Server Error", ['Error' => $e]);
// }


