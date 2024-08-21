<?php



if (isset($_POST['name'], $_POST['email'])) {

    //para capturar datos y mostrar
    //die("name: " . $_POST['name'] . " | Email: " . $_POST['email']);

    //para capturar fotos
    //print_r($_FILES['foto']);
    if($_FILES['foto']['type'] =='image/jpeg' or $_FILES['foto']['type'] =='image/png'){

        switch($_FILES['foto']['type']) {
            case 'image/jepg':
                $archivo = time().".jpg";
            break;
            case 'image/png':
                $archivo = time().".png";
            break;
        }

        copy($_FILES['foto']['tmp_name'],'upload/'.$archivo);

        echo $_FILES['foto']['type'];
        exit();
    }
    

}/* else{
    //redireccionar en php
    header("Location: formulario.php");
    exit();
} */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <p>
            <input type="text" name="name" id="name" placeholder="Nombre" />
        </p>
        <p>
            <input type="text" name="email" id="email" placeholder="Email" />            
        </p>
        <p>
            <input type="file" id="foto" name="foto"/>
        </p>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>