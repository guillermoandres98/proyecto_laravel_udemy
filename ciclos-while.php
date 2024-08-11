<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <h1>Ejercicios de Ciclos WHILE</h1>

        <ul>
            <?php
                $i=1;
            while($i<11)
            {
                ?>
                <li>El valor de i es: <?php echo $i;?> </li>
                <?php
                $i++;
            }
            ?>
        </ul>
</body>
</html>