<?php
require_once '../clases/CuentasUsuarios.php';

$usuario = new GestionUsuario();
$idUsuario = $_GET['idUsuario'];

if($idUsuario && $usuario->eliminar($idUsuario))
{
    header("Location: index.php");
}else{
    "Error al eliminar el usuario";
}

?>