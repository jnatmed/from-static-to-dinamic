<?php 

$menu = [
    [
        'href' => '/',
        'name' => 'Home'
    ],
    [
        'href' => '/about',
        'name' => 'Nosotros'
    ],
    [
        'href' => '/services',
        'name' => 'Servicios'
    ]
];

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/') {

    $titulo = htmlspecialchars($_GET['nombre'] ?? "PAW") ;
    require __DIR__ . '/../src/index.view.php';
    
    
} elseif ($path == '/about') {
    
    $titulo = 'Nosotros';
    $main = 'Pagina sobre Nosotros';
    require __DIR__ . '/../src/about.view.php';
    
} elseif ($path == '/services') {
    
    $titulo = 'Servicios';
    $main = 'Pagina de Servicios';
    require __DIR__ . '/../src/services.view.php';

} else {

    echo 'Page not found';



}


