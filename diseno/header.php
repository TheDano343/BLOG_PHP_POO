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
    <header class="item" id="inicio">
        <div class="logo">
            <li class="nav-link"><span>
                    <?php echo $nombreUsuario; ?>
                </span>
            </li>
        </div>
        <!-- Seleccion -->
        <nav class="main-nav">
            <ul id="main-menu" class="main-menu">

                <a href="../../../blogPHPPOO/blog/usuario/landingPage.php" class="main-menu_link">Inicio</a>

                <a href="../../../blogPHPPOO/blog/administrador/administrativo.php" class="main-menu_link">Administracion</a>

                <a href="../../../blogPHPPOO/cuentas/index.php" class="nav-link" class="main-menu_link">Cuentas</a>

                <a href="../../autenticacion/cerrar.php" class="main-menu_link">Cerrar Sesion</a>
            </ul>
        </nav>
    </header>
</body>

</html>