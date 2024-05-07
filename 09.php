<?php
include 'includes/header.php';

// Modificadores de acceso-> //public, private, protected//
// public = puedes acceder a sus valores desde la clase
// private = codigo mas cerrado 
// protected = acceso unicamnete en la clase
class Empleado {  // clase
    protected $nombre;  // atributos
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;  
    // todos los atributos se conocen como ABSTRACION

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

$cintia->setNombre('Anahi');
$cintia->setApellido('Campos');
echo $cintia->getCodigo();
echo $cintia->getNombre();


