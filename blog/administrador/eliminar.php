<?php

include '../../clases/Noticia.php';


$noticia = new Noticia();
$id = $_GET['idPublicacion'] ?? null;

if($id && $noticia->eliminar($id))
{
    header("Location: administrativo.php");
}else{
    "Error al eliminar el registro";
}

?>