<?php 


namespace Paw\App\Models;

use Paw\Core\Model;

use Exception;
use Paw\Core\Exceptions\InvalidValueFormatException;

class Autor extends Model
{       
    
    public $table = 'autor';

    public $fields = [
        'nombre' => null,
        'email' => null,
        'id' => null
    ];

    public function setId($id){
        $this->fields['id'] = $id;
    }

    public function setNombre(string $nombre)
    {
        if (strlen($nombre) > 60)
        {
            throw new InvalidValueFormatException("El nombre del autor no debe ser mayor a 60");
        }

        $this->fields['nombre'] = $nombre;

    }

    public function setEmail(string $email) 
    {
        $this->fields['email'] = $email;
    }

    public function getEmail(string $email)
    {   
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Formato de email no valido");
        }
        $this->fields['email'] = $email;
    }

    public function set(array $values)
    {
        foreach($values as $field => $value)
        {
            if(!isset($values[$field]))
            {
                continue;
            }
            $method = 'set'.ucfirst($field);
            $this->$method($value);
        }
        
    }

    public function load($id)
    {
        $params = [ "id" => $id];
        $record = current($this->queryBuilder->select($this->table, $params));
        $this->set($record);
    }

}