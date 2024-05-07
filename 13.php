<?php
include 'includes/header.php';
include 'DB.php';
// Comunicar 2 classes
class Empleado {  
    protected $nombre;  
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;  
    

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) 
    {
        $this->nombre = $nombre; // this hace referencia a los atributos
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    /*
    Get - para obtener un valor
    Set - para modificar un valor
    */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->nombre = $apellido;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }


}


$cintia = new Empleado('Cintia', 'Utrera', 'ti', 'correo@correo.com', 006); // ('Cintia')= Argumento

$nombre = $cintia->getNombre();


$db = new DB($nombre);

$db->guardar();