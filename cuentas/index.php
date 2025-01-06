<?php

include '../diseno/header.php';
require_once '../clases/Usuario.php';
require_once '../clases/CuentasUsuarios.php';



$usuario = new GestionUsuario();
$usuarios = $usuario->obtenerUsuarios();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../diseno/header.css">
</head>
<!------------------------------------------------------------------------------------------------------------------->
    
<div class="container">
        <section>
        <h2 class="text-center">Lista de cuentas</h2>
        <br>
        <div class="table-responsive">
        <!-- table:para crear la tabla -->
        <table class="table table-hover">
            <!-- thead:debe delimitar el encabezado de la tabla -->
            <thead>

            <!--  -->
            <div class="container">
                <a href="crear.php" class="btn btn-success">Agregar un usuario</a>
            </div>
            <br>
                <!-- tr:que es para crear filas de tablas -->
                <tr>
                    <!-- th:define una celda como encabezado de un grupo de celdas en una tabla -->
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($usuarios as $usuario): ?>
            

            <tr>
            <th><?= $usuario['idUsuario']; ?></th>
            <th><?= $usuario['nombre']; ?></th>
            <th><?= $usuario['correo']; ?></th>
            <td>
                <th><a href="editar.php?idUsuario=<?= $usuario['idUsuario']; ?>" class="btn btn-primary">Editar</a></th>
                <th><a href="eliminar.php?idUsuario=<?= $usuario['idUsuario']; ?>" class="btn btn-danger">Borrar</a></th>
            </td>

                </div>
                </div>

                <?php endforeach; ?>
            </tbody>

        </table>
        </div>
        
</div>
</body>
</html>
