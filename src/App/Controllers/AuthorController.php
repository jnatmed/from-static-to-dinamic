<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

use Paw\App\Models\AutoresCollection;
// use Paw\App\Models\Autor;


class AuthorController extends Controller
{
    public ?string $modelName = AutoresCollection::class;

    public function index()
    {

        $titulo = "Autores";
        $authors = $this->model->getAll();
        // var_dump($authors);
        require $this->viewsDir . 'authors.index.view.php';
    }

    public function get()
    {   
        global $request;
        $authorId = $request->get('id');
        $author = $this->model->get($authorId);
        $titulo = "Autor";        
        require $this->viewsDir . 'author.show.view.php';
    }   
    
    public function edit()
    {

    }

    public function set()
    {

    }
}