<?php

require_once '../../clases/Noticia.php';

class Dashboard extends Noticia
{
    public function visualizarNoticias()
    {
        $sql = "SELECT * FROM publicacion";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function noticiaSeleccionada($id)
    {
        $sql = "SELECT * FROM publicacion WHERE idPublicacion = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>