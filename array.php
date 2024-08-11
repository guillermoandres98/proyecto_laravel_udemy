<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Ejercicio Arreglosz </h1>

    <ul>
        <?php
        /**<?php 
        //valores del array parten del [0,1,2,3,4,5]
        $paises= array("chile","peru","bolivia","españa",34,true);
        
        echo count ($paises);

        ?>
        <?php 
        //mostrar el valor del arreglo
        print_r($paises); 
        ?>**/
        
        ?>
        <?php 
        $paises= array("chile","peru","bolivia","españa",34,true);
        for($i=0; $i<sizeof($paises); $i++){
            ?>
            
            <li><?php echo $paises[$i]; ?> </li>
            <?php
        }
        ?>
    </ul>
</body>

</html>