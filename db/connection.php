<?php

<<<<<<< HEAD
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
=======
$password = 'cardenas1501993';
$usuario = 'root';
$nombrebd = 'sistema_ldc';
>>>>>>> 2a50a3e60878fa1afa79d6040fc918ea253c6586

try {
    //code...
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombrebd,
        $usuario,
        $password
    );
} catch (Exception $e) {
    //throw $th;
    echo "Error de conexion ".$e->getMessage();
}
<<<<<<< HEAD
    
>>>>>>> 0eeb656fabc0b6619d3c5c36b39a719fae56f4f4
=======

>>>>>>> 2a50a3e60878fa1afa79d6040fc918ea253c6586
?>