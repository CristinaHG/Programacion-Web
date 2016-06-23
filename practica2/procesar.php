<?php

require_once('configuracion.php'); 

$nombre=""; $apellidos="";$usuario="";$clave=""; $direccion="";$ciudad="";$cp="";$provincia="";$email="";$dni="";$visa="";$observaciones="";$envio="";

try {
$conexion = new PDO( DB_DSN, DB_USUARIO, DB_CONTRASENIA );
// set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $sql_query = $conexion->prepare("INSERT INTO Clientes (Nombre,Apellidos,Nombre_Usuario,Clave,Direccion,
Ciudad,Codigo_Postal,Provincia,Correo,DNI,VISA,Observaciones,Suscripcion)
    VALUES (:Nombre,:Apellidos,:Nombre_Usuario,:Clave,:Direccion,:Ciudad,:Codigo_Postal,:Provincia,
    :Correo,:DNI,:VISA,:Observaciones,:Suscripcion)");
    $sql_query->bindParam(':Nombre', $nombre);
    $sql_query->bindParam(':Apellidos', $apellidos);
    $sql_query->bindParam(':Nombre_Usuario', $usuario);
    $sql_query->bindParam(':Clave', $clave);
    $sql_query->bindParam(':Direccion', $direccion);
    $sql_query->bindParam(':Ciudad', $ciudad);
    $sql_query->bindParam(':Codigo_Postal',$cp);
    $sql_query->bindParam(':Provincia',$provincia);
    $sql_query->bindParam(':Correo',$email);
    $sql_query->bindParam(':DNI', $dni);
    $sql_query->bindParam(':VISA', $visa);
    $sql_query->bindParam(':Observaciones', $observaciones);
    $sql_query->bindParam(':Suscripcion', $envio);


// insert a row
    $nombre=filter_var($_POST["nombre"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    //$nombre=filter_var($nombre,FILTER_SANITIZE_MAGIC_QUOTES);
    echo $nombre;
    $apellidos=filter_var($_POST["apellidos"],FILTER_SANITIZE_MAGIC_QUOTES);
    $apellidos=filter_var($apellidos,FILTER_SANITIZE_STRIPPED,FILTER_FLAG_STRIP_HIGH);
    echo $apellidos;
    $usuario=filter_var($_POST["usuario"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    
    $clave=filter_var($_POST["password"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $direccion=filter_var($_POST["direccion"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $ciudad=$_POST["ciudad"];
    if(!ctype_alpha($ciudad)) $ciudad=null;
    $cp=filter_var($_POST["cp"], FILTER_SANITIZE_NUMBER_INT);
    $provincia=$_POST["idmedios"];
    $email= filter_var($_POST["correo"],FILTER_SANITIZE_EMAIL);
    $dni=filter_var($_POST["DNi"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $visa=filter_var($_POST["VISA"], FILTER_SANITIZE_NUMBER_INT);
    $observaciones=filter_var($_POST["observaciones"],FILTER_SANITIZE_MAGIC_QUOTES);
    $envio=$_POST["envio"];

    $sql_query->execute();

echo "New client added successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;


//$consultaSQL = 'INSERT INTO' Clientes (Nombre,Apellidos,Nombre_Usuario,Clave,Direccion,Ciudad,Codigo_Postal,Provincia,Correo,DNI,VISA,Observaciones) VALUES . ('$_POST["nombre"]'.'$_POST["apellidos"]'.'$_POST["usuario"]'.'$_POST["password"]'.'$_POST["direccion"]'.'$_POST["ciudad"]'.'$_POST["cp"]'.'$_POST["idmedios"]'.'$_POST["correo"]'.'$_POST["DNi"]'.'$_POST["VISA"]'.'$_POST["observaciones"]');";
//$resultados = $conexion->query( $consultaSQL ); 
//echo $resultados;
//foreach($resultados as $fila){
//echo "titulo=" .$fila["titulo"]. "<br/>";
//}

?>


