<?php
include("config/bd.php");

session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM users WHERE usuario = '$usuario' AND contrasena = '$contrasena' ";
$resultado = $conexion->query($sql);

$row = $resultado->fetch(PDO::FETCH_ASSOC);

if ($row['usuario'] == $usuario && $row['contrasena'] == $contrasena) {
    $_SESSION['usuario'] = $usuario;
    header("Location: inicio.php");
}else {
    header("Location: index.php");
}




?>