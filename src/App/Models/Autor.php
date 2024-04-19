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
        'email' => null
    ];

    public function setNombre(string $nombre)
    {
        if (strlen($nombre) > 60)
        {
            throw new Exception("El nombre del autor no debe ser mayor a 60");
        }

        $this->fields['nombre'] = $nombre;

    }

    public function getEmail(string $email)
    {   
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Formato de email no valido");
        }
        $this->fields['email'] = $email;
    }

    public function set(array $val)
    {
        foreach(array_keys($this->fields) as $field)
        {
            if(!isset($values[$field]))
            {
                continue;
            }
            $method = 'set'.ucfirst($field);
            $this->$method($values[$field]);
        }
    }
}