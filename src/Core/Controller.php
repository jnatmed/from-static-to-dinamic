<?php

namespace Paw\Core;

use Paw\Core\Model; 
use Paw\Core\Database\QueryBuilder;

class Controller 
{
    public string $viewsDir;
    public array $menu;
    public ?string $modelName = null;   

    public function __construct(){
        $this->viewsDir = __DIR__ . '/../views/';

        $this->menu = [
            [
                'href' => '/',
                'name' => 'Home'
            ],
            [
                'href' => '/about',
                'name' => 'Quienes Somos'
            ],
            [
                'href' => '/services',
                'name' => 'Servicios'
            ],
            [
                'href' => '/contact',
                'name' => 'Contactos'
            ]
        ];
        if(!is_null($this->modelName)){
            $this->setModel(new $this->modelName);
        }
    }

    public function setModel(Model $model)
    {
        $this->modelName = $model;
    }
}