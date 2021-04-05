<?php

$servidor = "127.0.0.1";
$nombreusuario = "root";
$password = "cardenas1501993";
$db = "sistema_ldc";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion){
    echo "conexion correcta...";
}else{
    die("Conexión fallida: " . $conexion->connect_error);
    }
?>