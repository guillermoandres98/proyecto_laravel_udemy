<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ejercicios de Ciclos WHILE + Condicion</h1>

    <ul>
        <?php
            $i = 1;
            while ($i < 11) {

                if($i % 2 == 0){
                    ?>
                    <li>El valor de i = <?php echo "$i  " ?> </li>
                    <?php
                }


                $i++;
            }
        ?>
    </ul>

</body>

</html>