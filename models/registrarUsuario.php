<?php
    include("../models/conexionBd.php");
    $usuario   =(isset($_POST['usuario'])   and trim($_POST['usuario'])!="")  ? $_POST['usuario']:"";
    $apellidos =(isset($_POST['apellidos']) and trim($_POST['apellidos'])!="")? $_POST['apellidos']:"";  
    $curp      =(isset($_POST['curp'])      and trim($_POST['curp'])!="")     ? $_POST['curp']:""; 
    $fecha     =(isset($_POST['fecha'])     and trim($_POST['fecha'])!="")    ? $_POST['fecha']:"";
    $domicilio     =(isset($_POST['domicilio'])     and trim($_POST['domicilio'])!="")    ? $_POST['domicilio']:"";
    $email     =(isset($_POST['email'])     and trim($_POST['email'])!="")    ? $_POST['email']:"";
    $pass      =(isset($_POST['pass'])      and trim($_POST['pass'])!="")     ? $_POST['pass']:"";
    $act       = 'A';//a= activo B=baja*/
    //1= usuario normal
    $sqlUsuarios="SELECT * FROM usuarios WHERE Nombre='$usuario'";
    $consulta=$conne->query($sqlUsuarios);
    
    //echo $sqlUsuarios;
    if ($consulta->fetch()) { 
     echo "Este usuario ya existe";
     return false;
    }
    else{
      //echo"2";
      $insertar = "INSERT INTO usuarios (IdTipo, Nombre, Apellidos, Correo, Contra, Curp, Domicilio, FechaNacimiento, estatus) VALUES('1','$usuario', '$apellidos', '$email', '$pass', '$curp','$domicilio','$fecha', '$act')";  
      //echo $insertar;
      $insert=$conne->query($insertar);
       return true;
    }

?>