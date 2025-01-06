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
    <link rel="stylesheet" href="../diseno/table.css">
    <link rel="stylesheet" href="../diseno/header.css">
</head>

<body>

    <div class="centrado">
        <div class="crear">
        <a href="crear.php"><button class="azul">Agregar Usuario</button></a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td class="type">
                        <?= $usuario['idUsuario']; ?>
                    </td>
                    <td class="type">
                        <?= $usuario['nombre']; ?>
                    </td>
                    <td class="type">
                        <?= $usuario['correo']; ?>
                    </td>
                    <td>
                        <th><a href="editar.php?idUsuario=<?= $usuario['idUsuario']; ?>"><button class="amarillo">Editar</button></a></th>
                        <th><a href="eliminar.php?idUsuario=<?= $usuario['idUsuario']; ?>"><button class="rojo">Borrar</button></a></th>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
