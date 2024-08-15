<?php
    /* 
        Programacion lineal
        Programacion funcional
        Programacion orientada a los objetos
    */

    //metodos
    //no se recomienda imprimir en pantalla con una function
    function saludo() {
        /* echo "hola desde mi funcion"; */

        return "hola desde mi funcion";
    };

    //llamar metodo
    echo saludo();
    echo "<br>\n";


    //los metodos la mayoria de las veces reciben parametros
    function conParametros($num1, $num2, $op) {
        if($op == '+'){
            return $num1 + $num2;
        }
        if($op == '-'){
            return $num1 - $num2;
        }
        if($op == '*'){
            return $num1 * $num2;
        }
        if($op == '/'){
            if($num1 != 0 && $num2 != 0){
                return $num1 / $num2;
            };
        }
    };

    echo conParametros(40, 5, '+');
?>