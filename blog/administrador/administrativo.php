<?php

include '../../clases/Noticia.php';
include '../../diseno/header.php';

$noticia = new Noticia();
$noticias = $noticia->obtenerTodos();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/table.css">
    <link rel="stylesheet" href="../../diseno/header.css">
</head>

<body>

    <div class="centrado">
        <div class="crear">
        <a href="publicar.php"><button class="azul">Agregar Noticia</button></a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <td scope="col">Id</td>
                    <td scope="col">Titulo</td>
                    <td scope="col">Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($noticias as $noticia): ?>
                <tr>
                    <td class="type">
                        <?= $noticia['idPublicacion']; ?>
                    </td>
                    <td class="type">
                        <?= $noticia['titulo']; ?>
                    </td>
                    <td>
                        <a href="editar.php?idPublicacion=<?= $noticia['idPublicacion']; ?>"><button class="amarillo">Editar</button></a>
                        <a href="eliminar.php?idPublicacion=<?= $noticia['idPublicacion']; ?>"><button class="rojo">Borrar</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>


























