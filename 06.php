<?php
include 'includes/header.php';

// Constructor Property Promotion
class Empleado { 
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {}
}


$cintia = new Empleado('Cintia', 'Utrera', 'ti', 'correo@correo.com', 006); // ('Cintia')= Argumento
$lola = new Empleado('lola', 'Utre', 'ti', 'correo@correo.com', 007); // ('Cintia')= Argumento


echo "<pre>"; // etiqueta prev: formatea los objetos
var_dump($empleado); // funcion interna de php
echo "</pre>";