<?php 


namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Autor;

class AutoresCollection extends Model
{
    public $table = 'autor';

    public function getAll()
    {
        // crear tantos autor como filas de la tabla autores
        $authors = $this->queryBuilder->select($this->table);
        
        $authorsCollection = [];
        foreach ($authors as $author)
        {
            $newAutor = new Autor;
            $newAutor->set($author);
            var_dump($newAutor);
            $authorsCollection[] = $newAutor;
        }

        return $authorsCollection;
    }

    public function get($id)
    {
        $author = new Autor;
        $author->setQueryBuilder($this->queryBuilder);
        $author->load($id);
        return $author;
    }
}
