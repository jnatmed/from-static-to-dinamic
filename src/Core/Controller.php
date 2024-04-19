<?php

namespace Paw\Core;

use Paw\Core\Model; 
use Paw\Core\Database\QueryBuilder;
use Paw\App\Models\AutoresCollection;

class Controller 
{
    public string $viewsDir;
    public array $menu;
    public ?string $modelName = null;   
    public $log_local;

    public function __construct(){

        global $connection, $log;        

        // $this->log_local = $log;

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
            $log->info("__construct", [$model]);
            $this->setModel($model);
        }
    }

    public function setModel(Model $model)
    {
        // $this->log_local->info("setModel: ", [$model]);
        $this->modelName = $model;
    }
}