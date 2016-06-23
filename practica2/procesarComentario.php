<?php
/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 04/06/16
 * Time: 10:32
 */
session_start();
require_once('configuracion.php');
require_once('./clases/Comentario.php');
$comentario="";

//if(isset($_POST['Comentar']))   // it checks whether the user clicked comment button or not
//{
    $comentario = $_POST['comentario'];
    echo $comentario;
    if (isset($_GET['id'])) {
        $nombreDisco = $_GET['id'];
    }
    if (isset($_SESSION['use'])) {
        $nombreUsuario = $_SESSION['use'];
    }


    $ObjetoComment = new Comentario();
    $ObjetoComment->insertarComentario($nombreUsuario, $nombreDisco, $comentario);
    header("Location:disco.php?verDisco=$nombreDisco");
//}
?>

