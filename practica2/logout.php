<?php
/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 29/05/16
 * Time: 20:20
 */
session_start();

echo "Logout Successfully ";
session_destroy();   // function that Destroys Session
header("Location: index.php");
?>