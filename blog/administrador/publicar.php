<?php


require '../../clases/Noticia.php';


if(isset($_POST['creacionP']))
{
    $nombre_imagen = basename($_FILES['imagen']['name']);
    $rutaImagen = "../../blog/imagenes/". $nombre_imagen;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);

    $noticia = new Noticia($_POST['titulo'],$_POST['descripcion'],$_POST['contenido'],$rutaImagen);


    if($noticia->create())
    {
        header("Location: administrativo.php");
    }else{
        "Error al crear el registro";
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
            <h1 class="titulo">Crear Publicacion</h1>

            <div class="form-group">
                <!--name: Permite a un script acceder a su contenido. -->
                <label for="titulo">Titulo</label>
                <input class="form-control" name="titulo" type="text" placeholder="Coloca titulo">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control" name="descripcion" type="text" placeholder="Coloca descripcion">
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" name="contenido" placeholder="Coloca contenido"></textarea>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input class="form-control" name="imagen" type="file" placeholder="Coloca descripcion">
            </div>

            <div class="form-group">
                <!-- especifica el método HTTP que el navegador usará para enviar el formulario -->
                <button input="submit" class="btn btn-primary" name="creacionP">Crear</button>
                <a href="../administrador/administrativo.php" class="btn btn-dark">Regresar</a>

            </div>
    </form>
    </div>

</body>

</html>