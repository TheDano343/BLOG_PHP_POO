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
    <title>Document</title>
    <link rel="stylesheet" href="../diseno/form.css">

</head>

<body>
    <div class="container">
        <form id="form" method="post">
            <h1>Crear</h1>

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <span id="nombre_error"></span>
            </div>

            <div class="form-group">
                <label>Correo</label>
                <input type="text" class="form-control" name="correo" id="correo">
                <span id="correo_error"></span>
            </div>

            <div class="form-group">
                <button class="azul" type="submit" name="creacionUsuarios">Crear</button>
                <a href="../cuentas/index.php">Regresar</a>
            </div>
        </form>
        <script src="../js/validacionUsuario.js"></script>
    </div>
</body>

</html>