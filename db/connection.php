<?php

//variables de la cadena de conexion a la BD
$servidor = "127.0.0.1";
$nombreusuario = "root";
$password = "cardenas1501993";
$db = "sistema_ldc";

//cadena de conexion a la BD
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

//condicional para corroborar que la conexion a sido correcta de caso contrario nos manda un error
//de que la conexion a sido fallida
if($conexion){
    echo "conexion correcta...";
}else{
    die("Conexión fallida: " . $conexion->connect_error);
    }
?>