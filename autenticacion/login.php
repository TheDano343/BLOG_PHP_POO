<?php
session_start();
require_once '../clases/Usuario.php';

$mensaje = "";

if(isset($_POST['action']) && $_POST['action'] === 'login')
{
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $usuario = new Usuario("", $correo,$contraseña);
    $mensaje = $usuario->login();

    if(isset($_SESSION['usuario']))
    {
        header("Location: ../blog/administrador/administrativo.php");
        exit();
    }else{
        echo $mensaje;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../diseno/general.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <!--method:post : Subida de archivos -->
        <form id="form" method="post">
            
            <div class="form-group">
            <h2>Iniciar sesion</h2>
            </div>   

            <?php if($mensaje): ?>
                <p><?php echo $mensaje ?></p>
            <?php endif; ?>


            <input type="hidden" name="action" value="login">

            <div class="form-group"> 
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" placeholder="Ingresa el correo" id="correo">
            <span id="correo_error"></span>
            </div>
            
            <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" placeholder="Ingresa la contraseña" id="contraseña">
            <span id="contrasena_error"></span>
            </div>

            <div class="form-group"> 
                <!-- especifica el método HTTP que el navegador usará para enviar el formulario. -->
            <button input="submit" class="btn btn-primary" name="login">Acceder</button>

        </div> 
            <p>Crea tu cuenta <a href="../autenticacion/registro.php">Accede aqui</a></p>
        </div>

        <!-- <script src="../js/validacionesLogin.js"></script> -->

        </form>
    </div>
</body>
</html>