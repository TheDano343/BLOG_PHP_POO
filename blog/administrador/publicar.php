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
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/form.css">

</head>

<body>
    <div class="container">
        <form id="form" enctype="multipart/form-data" method="post">
            <h1>Crear</h1>
            
            <div class="form-group">
                <label>Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
                <p id="titulo_error"></p>
            </div>

            <div class="form-group">
                <label>Descripcion</label>
                <textarea type="text" class="form-control" id="descripcion" name="descripcion"></textarea>
                <span id="descripcion_error"></span>
            </div>

            <div class="form-group">
                <label>Contenido</label>
                <textarea type="text" class="form-control" id="contenido" name="contenido"></textarea>
                <span id="contenido_error"></span>
            </div>

             <div class="form-group">
                <label>Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
                <span id="imagen_error"></span>
            </div>
           
            <div class="form-group">
                <button class="azul" type="submit" name="creacionP">Crear</button>
                <a href="../administrador/administrativo.php">Regresar</a>
            </div>
        </form>
        <script src="../../js/validacionBlog.js"></script>
    </div>
</body>

</html>