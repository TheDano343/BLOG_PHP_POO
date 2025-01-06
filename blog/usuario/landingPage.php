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
    <link rel="stylesheet" href="../../diseno/cards.css">
</head>

<body>
    <div class="card-container">
        <?php foreach($informaciones as $informacion): ?>
        <a href="../usuario/visualizarInfo.php?idPublicacion=<?= $informacion['idPublicacion']; ?>" class="card-link">
            <div class="card">
                <img src="<?= $informacion['imagen'] ?>">
                <div class="card-content">
                    <h3><?= $informacion['titulo'] ?></h3>
                    <p><?= $informacion['descripcion'] ?></p>
                    <a class="btn">Leer Más</a>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</body>

</html>