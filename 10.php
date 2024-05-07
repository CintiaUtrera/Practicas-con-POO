<?php
include 'includes/header.php';

// HERENCIA extends
class Persona{
    public $nombre;  
    public $apellido;
    public $telefono;
    public $email;

    public function __construct($nombre, $apellido, $telefono, $email) 
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->email = $email;
    }
    public function mostrarInformacion(){
        echo "nombre: " . $this->nombre . " " . $this->apellido . "Email: " . $this->email;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
}


class Empleado extends Persona{  
    
    public $empresa;  

    public function __construct($nombre, $apellido, $telefono, $email, $empresa) 
    {
        parent::__construct($nombre, $apellido, $telefono, $email);
        $this->empresa = $empresa;
    }
}

class Proveedor extends Persona {  
    
    public $empresa;  

    public function __construct($nombre, $apellido, $telefono, $email, $empresa) 
    {
        parent::__construct($nombre, $apellido, $telefono, $email);
        $this->empresa = $empresa;
    }
}


$cintia = new Empleado('Cintia', 'Utrera', 123456, 'correo@correo.com', 'arcor'); // ('Cintia')= Argumento
$lola = new Proveedor('lola', 'Utre', 654321, 'correo@correo.com', 'macro'); // ('Cintia')= Argumento

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";

$empleado->mostrarInformacion();
$proveedor->mostrarInformacion();

echo $proveedor->getTelefono();
