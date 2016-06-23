<?php

/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 03/06/16
 * Time: 13:23
 */
require_once('DataObject.php');
class Disco extends DataObject
{

 protected $datos = array(
     ":Nombre_Disco" => "",
     ":Autor" => "",
     ":Genero" => "",
     ":Precio" => "",
     ":Producido" => "",
     ":Valoracion" => "",
     ":Imagen" => "");

 public static function obtenerDisco($disco)
 {
  $conexion = self::conectar();
  try {
   $sql_query = $conexion->prepare("SELECT * FROM Discos WHERE Nombre_Disco='$disco'");
   $sql_query->bindParam(':Nombre_Disco', $disco);
   $sql_query->execute();

   $resultado = $sql_query->fetch(PDO::FETCH_ASSOC);
   /*its getting data in line.And its an object*/
   // $resultado = $row->Clave;
  //}
   return $resultado;

  } catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
  }
  self::desconectar($conexion);
 }


public static function obtenerTodosDeSeccion($seccion)
{
 $conexion = self::conectar();
 try {
  $sql_query = $conexion->prepare("SELECT * FROM Discos WHERE Genero='$seccion'");
  $sql_query->bindParam(':Genero', $seccion);
  $sql_query->execute();


  $resultado=$sql_query->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
 }catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
 }
 self::desconectar($conexion);
 }



public static function obtenerComentariosDisco($disco)
{
 $conexion = self::conectar();
 try {
  $sql_query = $conexion->prepare("SELECT * FROM Comentarios WHERE Nombre_Disco='$disco'");
  $sql_query->bindParam(':Nombre_Disco', $disco);
  $sql_query->execute();

  $resultado="";
  $resultado=$sql_query->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
 }catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
 }
 self::desconectar($conexion);
}


public static function insertarDisco($Nombredisco,$autor,$genero,$precio,$productor,$valoracion,$img)
{
 $conexion = self::conectar();
 try {
  // prepare sql and bind parameters
  $sql_query = $conexion->prepare("INSERT INTO Discos(Nombre_Disco,Autor,Genero,Precio,Producido,Valoracion,Imagen) VALUES (:Nombre_Disco,:Autor,:Genero,
     :Precio,:Producido,:Valoracion,:Imagen)");

  $sql_query->bindParam(':Nombre_Disco', $Nombredisco);
  $sql_query->bindParam(':Autor', $autor);
  $sql_query->bindParam(':Genero', $genero);
  $sql_query->bindParam(':Precio',$precio);
  $sql_query->bindParam(':Producido',$productor);
  $sql_query->bindParam(':Valoracion',$valoracion);
  $sql_query->bindParam(':Imagen',$img);

  $sql_query->execute();
  echo "New disk added successfully";
 }
 catch(PDOException $e)
 {
  echo "Error: " . $e->getMessage();
 }
 $conn = self::desconectar($conexion);
}
  //$sql_query->bindValue(':Nombre_Disco', $disco->devolverValor('Nombre_Disco'));
}
?>