<?php
include 'includes/header.php';

// CONSTRUCTORES
class Empleado {  // clase
    public $nombre;  // atributos
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
}


$cintia = new Empleado('Cintia', 'Utrera', 'ti', 'correo@correo.com', 006); // ('Cintia')= Argumento
$lola = new Empleado('lola', 'Utre', 'ti', 'correo@correo.com', 007); // ('Cintia')= Argumento


echo "<pre>"; // etiqueta prev: formatea los objetos
var_dump($empleado); // funcion interna de php
echo "</pre>";