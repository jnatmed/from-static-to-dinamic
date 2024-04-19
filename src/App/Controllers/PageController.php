<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class PageController extends Controller{

    public function index() 
    {
        $titulo = "PAW POWER | HOME" ;
        require $this->viewsDir. 'index.view.php';
    }
    public function about() 
    {
        $titulo = 'Nosotros';
        $main = 'Pagina sobre Nosotros';
        require $this->viewsDir. 'about.view.php';            
    }
    public function contact($procesado= false)  
    {
        $titulo = 'Contactos';
        $main = 'Formas de Contacto';        
        require $this->viewsDir. 'contact.view.php';            
    }

    public function contactProccess()
    { 
        $formulario = $_POST;
        $this->contact(true);
        
    }

    public function services() 
    {
        $titulo = 'Servicios';
        $main = 'Pagina de Servicios';            
        require $this->viewsDir. 'services.view.php';            
    }

}
