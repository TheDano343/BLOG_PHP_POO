<?php
include '../../diseno/headerUsuario.php';
include '../../clases/Dashboard.php';


$id = $_GET['idPublicacion'] ?? null;

if($id)
{
    $noticia = new Dashboard();
    $noticiaSeleccionada = $noticia->noticiaSeleccionada($id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/noticia.css">
    <link rel="stylesheet" href="../../diseno/header.css">
</head>

<body>


    <div class="contendor-noticia">
        <div class="noticia-contenedor">
            <h1>
                <?= $noticiaSeleccionada['titulo'] ?>
            </h1>
            <?= $noticiaSeleccionada['descripcion'] ?>
            <img class="img-noticia" src="<?= $noticiaSeleccionada['imagen'] ?>" alt="">
            <p>
                <?= $noticiaSeleccionada['contenido'] ?>
            </p>
        </div>
    </div>

</body>

</html>