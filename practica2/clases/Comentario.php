<?php

/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 03/06/16
 * Time: 23:36
 */
require_once('DataObject.php');

class Comentario extends DataObject
{
    protected $datos = array(
        ":Nombre_Disco" => "",
        ":Nombre_Usuario" => "",
        ":Comentario" => "",
        ":fecha" => "");


    public static function insertarComentario($user, $disk, $comment)
    {

        $conexion = self::conectar();
        try {
            // prepare sql and bind parameters
            $sql_query = $conexion->prepare("INSERT INTO Comentarios (Nombre_Disco,Nombre_Usuario,Comentario,fecha)
            VALUES (:Nombre_Disco,:Nombre_Usuario,:Comentario,Now())");

            $sql_query->bindParam(':Nombre_Disco', $disk);
            $sql_query->bindParam(':Nombre_Usuario', $user);
            $sql_query->bindParam(':Comentario', $comment);
           // $sql_query->bindParam(':fecha',Now());

            $sql_query->execute();
            echo "New comment added successfully";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
        $conn = self::desconectar($conexion);
    }
}