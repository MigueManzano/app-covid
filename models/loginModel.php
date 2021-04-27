<?php
  include("conexionBd.php");
  $correo  =(isset($_POST['correo'])  and trim($_POST['correo'])!="")  ? $_POST['correo']:"";
  $contra  =(isset($_POST['contra'])  and trim($_POST['contra'])!="")  ? $_POST['contra']:"";

  
  $sqlCon="SELECT * FROM usuarios WHERE Correo='$correo' and Contra='$contra' ";
  
  $consulta=$conne->query($sqlCon);
  if ($rows = $consulta->fetch()) { 
    session_start();
    $_SESSION['nombre'] =$rows["Nombre"];
    $_SESSION['apellidos'] =$rows["Apellidos"];
    $_SESSION['correo'] = $rows["Correo"];
    $_SESSION['tipo'] = $rows["IdTipo"];
      
    echo "1";
    
  }else{
    
    echo "3";
   // echo $insertar;
  } 
  

?>