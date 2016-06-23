<?php
/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 05/06/16
 * Time: 01:28
 */
session_start();
require_once('configuracion.php');
require_once('./clases/Disco.php');

$nombreD=""; $autor="";$genero="";$precio="";$productor="";$valoracion="";$img="";

$nombreD=$_POST['nombreDisco'];
$autor=$_POST['autor'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];
$productor=$_POST['producido'];
$valoracion=$_POST['valoracion'];
$img=$_POST['imagenDisco'];

//$disco=array($nombreD,$autor,$genero,$precio,$productor,$valoracion,$img);
//echo $disco[0];
//echo $disco[1];

$objeto=new Disco();
$objeto->insertarDisco($nombreD, $autor, $genero, $precio, $productor, $valoracion, $img);



