<?php

require_once '../clases/CuentasUsuarios.php';


if(isset($_POST['creacionUsuarios']))
{    
    $usuario = new GestionUsuario($_POST['nombre'],$_POST['correo']);

    if($usuario->create())
    {
        header("Location: index.php");
    }else{
        "Error al crear el registro";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../diseno/general.css">
    <title>Document</title>
</head>

<body>
    <form  method="POST">

        <div class="container">
            <h1 class="titulo">Crear cuenta</h1>

            <div class="form-group">
                <!--name: Permite a un script acceder a su contenido. -->
                <label for="titulo">Nombre</label>
                <input class="form-control" name="nombre" type="text" placeholder="Coloca titulo">
            </div>

            <div class="form-group">
                <!--name: Permite a un script acceder a su contenido. -->
                <label for="titulo">Correo</label>
                <input class="form-control" name="correo" type="text" placeholder="Coloca titulo">
            </div>


            <div class="form-group">
                <!-- especifica el método HTTP que el navegador usará para enviar el formulario -->
                <button input="submit" class="btn btn-primary" name="creacionUsuarios">Crear</button>
                <a href="../administrador/administrativo.php" class="btn btn-dark">Regresar</a>

            </div>
    </form>
    </div>

</body>

</html>