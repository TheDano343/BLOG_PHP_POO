<?php
require_once '../clases/Usuario.php';

$mensaje = "";

if(isset($_POST['action']) && $_POST['action'] === 'register')
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $usuario = new Usuario();
    $usuario->setNombre($nombre);
    $usuario->setCorreo($correo);
    $usuario->setContraseña($contraseña);

    $mensaje = $usuario->registrar();
    // echo $mensaje;
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
            <h1>Registrar Usuarios</h1>

            <?php if($mensaje): ?>
                <p><?php echo $mensaje ?></p>
            <?php endif; ?>

            <input type="hidden" name="action" value="register">
            
            <div class="form-group"> 
                <label for="correo">Nombre del Usuario</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre">
            </div>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingresa el correo">
            </div>

            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="text" class="form-control" name="contraseña" id="contraseña" placeholder="Ingresa la contraseña">
            </div>
           
            <div class="botones-grupo">
                <button class="azul" type="submit" name="login">Acceder</button>
                <p id="warnings"></p>
            </div>
                <p>Crea tu cuenta <a href="../autenticacion/login.php">Accede aqui</a></p>
        </form> 
    <script src="../js/validacionesRegistro.js"></script>

    </div>
</body>

</html>
