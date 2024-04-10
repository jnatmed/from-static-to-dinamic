<?php

require __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;

$whoops = new \Whoops\Run;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log', Level::Debug));

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();
