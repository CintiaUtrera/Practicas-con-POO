<?php
include 'includes/header.php';

// Métodos ESTATICOS = No requieren una instancia para acceder a ellos
class Empleado {  
    protected static $nombre;  
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;  
    // todos los atributos se conocen como ABSTRACION

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) 
    //constructor se manda a llamar en automatico cuando fue instanciada una clase
    {
        self::$nombre = $nombre; 
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public static function obtenerEmpleado()
    {
        echo "Desde metodo estatico";
    }

    public static function getNombre()
    {
        return self::$nombre;
    }
}

//Empleado::obtenerEmpleado();
$cintia = new Empleado('cintia', 'utrera', 'ti', 'correo', 005); // instancia
echo $cintia::getNombre();
