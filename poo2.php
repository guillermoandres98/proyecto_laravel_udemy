<?php
 class MiClase{

    public static function miMetodo(){
        return "hola desde mi metodos";
    }   
 }

   /*  $Miclase = new MiClase();
    echo $Miclase->miMetodo(); */

    //mostrar metodo de forma estatica
    echo MiClase::miMetodo();

?>
