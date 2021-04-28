<?php
    $servername = "localhost";
    $database = "sistema_ldc"; 
    $username = "root";
    $password = ""; 
    try {
        $conne = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        //$conne = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>