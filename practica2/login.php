<?php
/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 29/05/16
 * Time: 12:31
 */
session_start(); ?>

<?php

require_once('configuracion.php');

function isClient($client,$password){

try {
    $conexion = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
    $sql_query =$conexion->prepare("SELECT Clave FROM Clientes WHERE Nombre_Usuario='$client'");

    $sql_query->execute();

    $resultado="";
    while($row=$sql_query->fetch(PDO::FETCH_OBJ)) {
        /*its getting data in line.And its an object*/
        $resultado= $row->Clave;
    }

}catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $conexion = null;

    if($resultado===$password) return true;
    else return false;

}




if(isset($_POST['acceso']))   // it checks whether the user clicked login button or not
{
    $user = $_POST['usuario'];
    $pass = $_POST['passwd'];


    if(isClient($user,$pass))  // user is in client's dataset
    {

        $_SESSION['use']=$user;
    }
    else
    {
        echo "invalid UserName or Password";
    }
}


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
    // true that header redirect it to the home page directly
{
    header("Location:index.php");
}


?>

