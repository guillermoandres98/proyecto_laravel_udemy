<?php
    //funciones con mas parametros
    //los parametros no sean obligatorio
    function conMasDatos($saludo, $despedida="adios"){
        return $saludo. " ". $despedida;
    }
    echo conMasDatos("hola");
    echo "<br>";
    echo "<br>";

    //funcion con arreglos
    $paises = array( "1", "2", "3", "4");

    function conArreglo($paises= Array()){
        return $paises;
    }
    print_r(conArreglo($paises));


?>