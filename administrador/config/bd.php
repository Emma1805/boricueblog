<?php
$host="localhost";
$bd="boricue";
$usuario="root"; 
$contrasena="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasena);
} catch (Exception $ex) {
    
    echo $ex->getMessage();
}
?>