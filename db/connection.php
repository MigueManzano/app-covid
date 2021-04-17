<?php

//variables de la cadena de conexion a la BD
<<<<<<< HEAD
$servidor = "127.0.0.1";
$nombreusuario = "root";
///$password = "cardenas1501993"; para migue
$password ="";
$db = "sistema_ldc";

//cadena de conexion a la BD
///$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
$conexion = new PDO("mysql:host=$servidor;dbname=$db", $nombreusuario, $password);

//condicional para corroborar que la conexion a sido correcta de caso contrario nos manda un error
//de que la conexion a sido fallida
if($conexion){
    echo "conexion correcta...";
}else{
    die("Conexión fallida: " . $conexion->connect_error);
    }
=======
$servername = "127.0.0.1";
$database = "sistema_ldc"; 
$username = "root";
$password = "cardenas1501993"; 

try {
    //cadena de conexion a la BD
    $conne = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    echo "conexion con exito";
    //$conne = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "error de conexion";
    die();
}
    
>>>>>>> 0eeb656fabc0b6619d3c5c36b39a719fae56f4f4
?>