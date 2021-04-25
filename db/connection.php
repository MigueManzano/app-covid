<?php

$password = 'cardenas1501993';
$usuario = 'root';
$nombrebd = 'sistema_ldc';

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

?>