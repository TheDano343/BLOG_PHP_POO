<?php

require '../DB/BaseDeDatos.php';

// extends : Hereda de la clase BaseDeDatos
class Usuario extends BaseDeDatos
{
    // Atributos de la clase Usuario y tipo de dato
    private string $nombre;
    private string $correo;
    private string $contraseña;

// __construct : Incializa los atributos
//  asignar un valor inicial a una variable o objeto de datos
// "": Sirve para propocionar valor para los atributos 
public function __construct($nombre = "", $correo = "", $contraseña = "")
{
    parent::__construct(); // Llama al constructor de la BaseDeDatos
    $this->nombre = $nombre; //asigna valor al atributo nombre
    $this->correo = $correo; //asigna valor al atributo correo
    $this->contraseña = $contraseña;//asigna valor al atributo contraseña
}

// Getters
public function getNombre()
{
    return $this->nombre; //Devuelve el valor del atributo nombre
}

public function getCorreo()
{
    return $this->correo; //Devuelve el valor del atributo correo
}

public function getContraseña()
{
    return $this->contraseña; //Devuelve el valor del atributo contraseña     
}

// Setters
public function setNombre($nombre)
{
    $this->nombre = $nombre; //Asigna el valor del atributo nombre
}

public function setCorreo($correo)
{
    // $correo : se utiliza para recibir el valor asignado al atributo privado
    $this->correo = $correo; //Asigna el valor del atributo correo    
}

public function setContraseña($contraseña)
{
    // password_hash(): Crea un nuevo hash de contraseña usando un algoritmo de hash fuerte de único sentido
    // PASSWORD_DEFAULT: El algoritmo predeterminado que se utilizará para el hash si no se proporciona ningún algoritmo .
    $this->contraseña = password_hash($contraseña,PASSWORD_DEFAULT); //Asigna el valor del atributo contraseña    
}

// Metodo para registrar el usuario
public function registrar()
{
    // Verificar si ya existe
    $stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $this->correo); // Asocia parametros con el parametro correo
    $stmt->execute(); // Ejecuta la consulta y devuelve el resultado
    $resultado = $stmt->get_result(); // Obtiene los resultados de una consulta

    if($resultado->num_rows > 0) // Verifica si ya existe un usuario con ese correo
    {
        return "El usuario ya existe.";
    }

    // Consulta para Insertar un nuevo usuario    
    $stmt = $this->conexion->prepare("INSERT INTO usuarios(nombre,correo,contraseña) VALUES(?,?,?)"); // Consulta para guardar la publicacion 
    // "sss": Sirve para especifircar los tipos de datos en cada uno de los parametros
    $stmt->bind_param("sss",$this->nombre,$this->correo,$this->contraseña);// Asocia los parametros

    if($stmt->execute()) // Dependiendo el resultadode la consulta devuelve el mensaje
    {
        return "Usuario registro existosamente."; 
    }else{
        return "Error al registrar el usuario.";
    }
}


    public function login()
    {
        // Busca el correo si esta en la base de datos
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $this->correo); // Asocia parametros con el parametro correo
        $stmt->execute();// Ejecuta la consulta y devuelve el resultado
        $resultado = $stmt->get_result();// Obtiene los resultados de una consulta

        if($resultado->num_rows > 0)// Verifica si existe un usuario con ese correo
        {
            $usuario = $resultado->fetch_assoc(); // Obtiene los resultado como un array asociativo

            //Verificar contraseña propocionada coincide con la almacena
            if(password_verify($this->contraseña, $usuario['contraseña']))
            {
                session_start(); // Inicia session
                $_SESSION['usuario'] = $usuario['nombre']; //Guarda el nombre del usuario en la sesion
            }else{
                return "Contraseña incorrecta";
            }
            return "Usuario encontrado";
        }
    }
    }

?>

