<?php

include '../../clases/Noticia.php';

$id = $_GET['idPublicacion'] ?? null;

if($id)
{
    $noticia = new Noticia();
    $noticiaActual = $noticia->obtenerId($id);
    
    if(isset($_POST['titulo']))
    {
    $nombre_imagen = $noticiaActual['imagen'];

        
    if(!empty($_FILES['imagen']['name']))
    {
    $nombre_imagen = basename($_FILES['imagen']['name']);
    $rutaImagen = "../../blog/imagenes/". $nombre_imagen;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);
    }

    $noticia = new Noticia($_POST['titulo'],$_POST['descripcion'],$_POST['contenido'],$rutaImagen);

    if($noticia->actualizar($id))
    {
        header("Location: administrativo.php");
    }else{
        echo "Error al actualizar";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../diseno/general.css">
    <title>Document</title>
</head>

<body>
    <!-- enctype="multipart/form-data" : Cuando se envían archivos binarios, como imágenes, archivos de audio, archivos de vídeo, etc., desde un formulario HTML a un servidor. -->
    <form enctype="multipart/form-data" method="POST">

        <div class="container">
            <section>
            <h1 class="titulo">Actualizar Publicacion</h1>

            <div class="form-group">
                <!--name: Permite a un script acceder a su contenido. -->
                <label for="titulo">Titulo</label>
                <input class="form-control" name="titulo" type="text" value="<?= $noticiaActual['titulo']; ?>" placeholder="Coloca titulo">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control" name="descripcion" type="text" value="<?= $noticiaActual['descripcion']; ?>" placeholder="Coloca descripcion">
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" name="contenido" placeholder="Coloca contenido"><?= $noticiaActual['contenido']; ?></textarea>
            </div>

            <div class="form-group">
            <input class="form-control" name="imagen" type="file" id="imagen">
            <?php if (!empty($noticiaActual['imagen'])): ?>
                <img src="<?= $noticiaActual['imagen'] ?>" class="img-fluid mt-2" alt="imagen">
            <?php endif; ?>
        </div>

            <div class="form-group">
                <!-- especifica el método HTTP que el navegador usará para enviar el formulario -->
                <button input="submit" class="btn btn-primary" name="btnActualizar">Actualizar</button>
                <a href="../administrador/administrativo.php" class="btn btn-dark">Regresar</a>

            </div>
            </section>
            
    </form>
    </div>

</body>

</html>