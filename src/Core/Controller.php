<?php

namespace Paw\Core;

use Paw\Core\Model; 
use Paw\Core\Database\QueryBuilder;

class Controller 
{
    public string $viewsDir;
    public array $menu;
    public ?string $modelName = null;   
    protected $model;

    public function __construct(){

        global $connection, $log;        

        $this->viewsDir = __DIR__ . '/../App/views/';

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
            ],
            [
                'href' => '/authors',
                'name' => 'Autores'
            ]
        ];

        if(!is_null($this->modelName)){
            $qb = new QueryBuilder($connection, $log);
            $model = new $this->modelName;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }
}