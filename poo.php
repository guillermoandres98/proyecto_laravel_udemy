<?php
    //PROGRAMACION ORIENTADA A OBJETOS

    //Declarar una clase
    /*
        -Metodos
        -Atributos
        -Constructor
        -Metodos estaticos
    */ 
    class Miclase{

        //atributos con modificadores de acceso
        public $nombre;
        public $corrreo;
        public $edad;
        //constructor
        public function __construct($nombre, $corrreo, $edad){
            $this-> nombre = $nombre;
            $this-> corrreo =$corrreo;
            $this-> edad = $edad;
        }
        //metodos
        public function getNombre(){
            return $this->nombre;
        }
        //metodos estaticos
    }

    //instancia (llamar) a la $variable-> variable de instancia
    $miClase = new Miclase("guillermo","hola@hola","14");
    echo $miClase->getNombre();

?>