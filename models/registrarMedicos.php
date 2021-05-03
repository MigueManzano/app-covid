<?php
    include("../models/conexionBd.php");
    $usuario   =(isset($_POST['usuario'])   and trim($_POST['usuario'])!="")  ? $_POST['usuario']:"";
    $apellidos =(isset($_POST['apellidos']) and trim($_POST['apellidos'])!="")? $_POST['apellidos']:"";  
    $curp      =(isset($_POST['curp'])      and trim($_POST['curp'])!="")     ? $_POST['curp']:""; 
    $fecha     =(isset($_POST['fecha'])     and trim($_POST['fecha'])!="")    ? $_POST['fecha']:"";
    $domicilio     =(isset($_POST['domicilio'])     and trim($_POST['domicilio'])!="")    ? $_POST['domicilio']:"";
    $email     =(isset($_POST['email'])     and trim($_POST['email'])!="")    ? $_POST['email']:"";
    $cedula     =(isset($_POST['cedula'])     and trim($_POST['cedula'])!="")    ? $_POST['cedula']:"";
    $pass      =(isset($_POST['pass'])      and trim($_POST['pass'])!="")     ? $_POST['pass']:"";
    //1= usuario normal
    $sqlUsuarios="SELECT * FROM medicos WHERE Correo='$email'";
    $consulta=$conne->query($sqlUsuarios);
    
    //echo $sqlUsuarios;
    if ($consulta->fetchColumn() > 0) { 
     echo "Este usuario ya existe";
     echo "1";
    }
    else{
      //echo"2";
      $insertar = "INSERT INTO medicos (Nombre, Apellidos, cedula, Correo, Contra, Curp, Domicilio, FechaNacimiento) VALUES('$usuario', '$apellidos','$cedula', '$email', '$pass', '$curp','$domicilio','$fecha')";  
     // echo $insertar;
      $insert=$conne->query($insertar);
       echo "0" ;
    }

?>