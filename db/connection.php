<?php

//variables de la cadena de conexion a la BD
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
    
?>