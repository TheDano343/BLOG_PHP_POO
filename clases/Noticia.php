<?php

require '../../DB/BaseDeDatos.php';


class Noticia extends BaseDeDatos
{    
    // Atributos de la clase Usuario y tipo de dato
    private int $id;
    private string $titulo;
    private string $descripcion;
    private string $contenido;
    private string $imagen;

    // getters
    public function obtencionId()
    {
        return $this->id; // Devuelve el valor del atributo id
    }

    public function obtenerTitulo()
    {
        return $this->Titulo; // Devuelve el valor del atributo Titulo
    }

    public function obtenerDescripcion()
    {
        return $this->descripcion; // Devuelve el valor del atributo descripcion
    }

    public function obtenerContenido()
    {
        return $this->contenido; // Devuelve el valor del atributo contenido
    }

    public function obtenerImagen()
    {
        return $this->imagen; // Devuelve el valor del atributo imagen
    }    
    
    // setters
    public function colocarTitulo($titulo)
    {
         $this->Titulo = $titulo; // Asigna valor al atributo titulo
    }

    public function colocarDescripcion($descripcion)
    {
         $this->descripcion = $descripcion; // Asigna valor al atributo descripcion
    }

    public function colocarContenido($contenido)
    {
         $this->contenido = $contenido; // Asigna valor al atributo contenido
    }

    public function colocarImagen($imagen)
    {
         $this->imagen = $imagen; // Asigna valor al atributo imagen
    }


    public function __construct($titulo = '',$descripcion = '',$contenido = '',$imagen = '')
    {
        parent::__construct();// Llama al contructos de la base de datos 
        $this->titulo = $titulo;// Asigna el valor al atributo titulo 
        $this->descripcion = $descripcion;// Asigna el valor al atributo descripcion  
        $this->contenido = $contenido;// Asigna el valor al atributo contenido  
        $this->imagen = $imagen;// Asigna el valor al atributo imagen  
    }

    
    public function create()
    {
        $sql = "INSERT INTO publicacion(titulo,descripcion,contenido,imagen) VALUES(?,?,?,?)"; // Consulta para guardar la publicacion 
        $stmt = $this->conexion->prepare($sql); // Prepara la consulta
        $stmt->bind_param("ssss",$this->titulo,$this->descripcion,$this->contenido,$this->imagen); // Asocia los parametros
        return $stmt->execute(); // Ejecuta la consulta y devuelve el resultado
    }

    // Método para obtener una publicacion por su ID
    // Metodo para actualizar la publicacion 
    public function actualizar($id)
    {
        $sql = "UPDATE publicacion SET titulo = ?,descripcion = ?,contenido = ?, imagen = ? WHERE idPublicacion = ?"; // Consulta para actualizar la publicacion 
        $stmt = $this->conexion->prepare($sql); // Prepara la consulta
        $stmt->bind_param("ssssi",$this->titulo,$this->descripcion,$this->contenido,$this->imagen,$id); // Asocia los parametros
        return $stmt->execute(); // Ejecuta la consulta y devuelve el resultado
    }

    public function obtenerTodos()
    {
        $sql = "SELECT * FROM publicacion"; // Consulta para visualizar la publicacion 
        $result = $this->conexion->query($sql); // Prepara la consulta
        return $result->fetch_all(MYSQLI_ASSOC); // Devuelve los resultado como un array asociativo
    }

    // Método para obtener una publicacion por su ID
    public function obtenerId($id)
    {
        $sql = "SELECT * FROM publicacion WHERE idPublicacion = ?"; // Consulta para la publicacion 
        $stmt = $this->conexion->prepare($sql); // Prepara la consulta
        $stmt->bind_param("i",$id); // Asocia los parametros
        $stmt->execute(); // Ejecuta la consulta y devuelve el resultado
        return $stmt->get_result()->fetch_assoc(); // Devuelve los resultado como un array asociativo
    }



    public function eliminar($id)
    {
        $sql = "DELETE FROM publicacion WHERE idPublicacion = ?"; // Consulta para borrar la publicacion 
        $stmt = $this->conexion->prepare($sql); // Prepara la consulta
        $stmt->bind_param("i",$id); // Asocia los parametros
        return $stmt->execute(); // Ejecuta la consulta y devuelve el resultado
    }
}
?>