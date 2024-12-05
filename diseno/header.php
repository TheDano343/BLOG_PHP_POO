<?php

        session_start(); //Inicia la sesion

        // Verifica si el usuario inicio lasesion
        if (!isset($_SESSION['usuario'])) {
            // Si no ha iniciado sesión, redirige al usuario a la página de inicio de sesión
            header("Location: ../../autenticacion/login.php");
            exit();
        }
        
        // Obtiene el nombre del usuario de la sesión
        $nombreUsuario = $_SESSION['usuario']; 
?>
 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../../../blogPHPPOO/blog/usuario/landingPage.php" class="nav-link">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="administrativo.php" class="nav-link">Administrativo</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                        <a href="../../autenticacion/cerrar.php" class="nav-link">Cerrar</a>
                </li>

                <li class="nav-link"><span><?php echo $nombreUsuario; ?></span>
                </li>

                </ul>
            </div>


        </nav>
</body>

</html>

