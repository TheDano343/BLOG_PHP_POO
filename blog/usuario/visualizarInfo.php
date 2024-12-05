<?php
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
</head>
<body>


    
<div class="box-noticia">
    <h1><?= $noticiaSeleccionada['titulo'] ?></h1>
    <?= $noticiaSeleccionada['descripcion'] ?>
    <img src="<?= $noticiaSeleccionada['imagen'] ?>" alt="">
    <p><?= $noticiaSeleccionada['contenido'] ?></p>
</div>

</div>
</body>
</html>