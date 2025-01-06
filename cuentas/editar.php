<?php

require_once '../clases/CuentasUsuarios.php';
require_once '../clases/Usuario.php';

$idUsuario = $_GET['idUsuario'] ?? null;

if($idUsuario)
{
    $usuario = new GestionUsuario();
    $usuarioActual = $usuario->obtenerId($idUsuario);

    if(isset($_POST['creacionUsuarios']))
    {

    $usuario = new GestionUsuario($_POST['nombre'],$_POST['correo']);

    if($usuario->actualizar($idUsuario))
    {
        header("Location: index.php");
    }else{
        echo "Error al actualizar";
    }
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
            <h1>Editar</h1>
            
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" value="<?= $usuarioActual['nombre']; ?>" name="nombre" id="nombre">
                <span id="nombre_error"></span>
            </div>

            <div class="form-group">
                <label>Correo</label>
                <input type="text" class="form-control" value="<?= $usuarioActual['correo']; ?>" name="correo" id="correo">
                <span id="correo_error"></span>
            </div>
           
            <div class="form-group">
                <button class="azul" type="submit" name="creacionUsuarios">Actualizar</button>
                <a href="../cuentas/index.php">Regresar</a>
            </div>
        </form>
        <script src="../js/validacionUsuario.js"></script>
    </div>
</body>

</html>