<?php

require_once '../DB/BaseDeDatos.php';
require_once '../clases/Usuario.php';



class GestionUsuario extends Usuario
{
    private string $nombre;
    private string $correo;

    public function __construct($nombre = "", $correo = "")
    {
        parent::__construct(); // Llama al constructor de la BaseDeDatos
        $this->nombre = $nombre; //asigna valor al atributo nombre
        $this->correo = $correo; //asigna valor al atributo correo
    }

    // Getters
    public function getNombre()
    {
        return $this->nombre;
    }   
    
     public function getCorreo()
    {
        return $this->correo;
    }   
    
    // Setters
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }   
    
     public function setCorreo($correo)
    {
        return $this->correo = $correo;
    }   
    
    public function create()
    {
        $sql = "INSERT INTO usuarios(nombre,correo) VALUES(?,?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss",$this->nombre,$this->correo);
        return $stmt->execute();
    }

    public function actualizar($idUsuario)
    {
        $sql = "UPDATE usuarios SET nombre = ?,correo = ? WHERE idUsuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssi",$this->nombre,$this->correo,$idUsuario);
        return $stmt->execute();
    }

    public function obtenerUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerId($idUsuario)
    {
        $sql = "SELECT * FROM usuarios WHERE idUsuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i',$idUsuario);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function eliminar($idUsuario)
    {
        $sql = "DELETE FROM usuarios WHERE idUsuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i",$idUsuario);
        return $stmt->execute();
    }

}
?>