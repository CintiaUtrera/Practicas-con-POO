<?php
include 'includes/header.php';

// Métodos
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

    public function nombreEmpleado()
    {
        echo $this->nombre . " " . $this->apellido;
    }
    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}


$cintia = new Empleado('Cintia', 'Utrera', 'ti', 'correo@correo.com', 006); // ('Cintia')= Argumento


$lola = new Empleado('lola', 'Utre', 'ti', 'correo@correo.com', 007); // ('Cintia')= Argumento


echo "<pre>"; // etiqueta prev: formatea los objetos
var_dump($cintia); // funcion interna de php
echo "</pre>";

$departamento1 = $cintia->departamentoEmpleado();
echo $departamento1;