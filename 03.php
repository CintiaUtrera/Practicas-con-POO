<?php
include 'includes/header.php';


// Instanciar una clase
class Empleado {  // clase
    public $nombre;  // atributos
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;  
    // todos los atributos se conocen como ABSTRACION

}

$empleado = new Empleado; // instancia

$empleado->nombre = "Cintia"; // pasar info por medio de un objeto
$empleado->apellido = "Utrera"; // pasar info por medio de un objeto


echo "<pre>"; // etiqueta prev: formatea los objetos
var_dump($empleado); // funcion interna de php
echo "</pre>";