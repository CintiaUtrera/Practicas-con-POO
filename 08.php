<?php
include 'includes/header.php';

// Modificadores de acceso-> //public, private, protected//
// public = puedes acceder a sus valores desde la clase
// private = codigo mas cerrado 
// protected = acceso unicamnete en la clase
class Empleado {  // clase
    protected $nombre;  // atributos
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;  
    // todos los atributos se conocen como ABSTRACION

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) 
    //constructor se manda a llamar en automatico cuando fue instanciada una clase
    {
        $this->nombre = $nombre; // this hace referencia a los atributos
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    public function obtenerNombre()
    {
        return $this->nombre;
    }

}


$cintia = new Empleado('Cintia', 'Utrera', 'ti', 'correo@correo.com', 006); // ('Cintia')= Argumento
echo $cintia->obtenerNombre();

echo "<pre>"; // etiqueta prev: formatea los objetos
var_dump($cintia); // funcion interna de php
echo "</pre>";

