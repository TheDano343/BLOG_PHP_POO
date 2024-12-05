<?php

include '../../clases/Dashboard.php';
$informacion = new Dashboard();
$informaciones = $informacion->visualizarNoticias()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../../diseno/header.css">
<link rel="stylesheet" href="../../diseno/dashboard.css">
</head>
<body>

<div class="container">
    <?php foreach($informaciones as $informacion): ?>

        <a href="../usuario/visualizarInfo.php?idPublicacion=<?= $informacion['idPublicacion']; ?>" class="card-link">
            
            <div class="card">
                <img src="<?= $informacion['imagen'] ?>" alt="">
                <div class="intro">
                <h1><?= $informacion['titulo'] ?></h1>
                <p><span><?= $informacion['descripcion'] ?></span></p>
                </div>
                </a>
            </div>
            <?php endforeach; ?>   
        </div>