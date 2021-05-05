<?php
  include("conexionBd.php");
  $correo  =(isset($_POST['correo'])  and trim($_POST['correo'])!="")  ? $_POST['correo']:"";
  $contra  =(isset($_POST['contra'])  and trim($_POST['contra'])!="")  ? $_POST['contra']:"";

  
  $sqlCon="SELECT * FROM usuarios WHERE Correo='$correo' and Contra='$contra' ";
  $sqlCon2="SELECT * FROM medicos WHERE Correo='$correo' and Contra='$contra' ";
  
  $consulta=$conne->query($sqlCon);
  $consulta2=$conne->query($sqlCon2);
  if ($rows = $consulta->fetch()) {
     
    session_start();
    $_SESSION['nombre'] =$rows["Nombre"];
    $_SESSION['apellidos'] =$rows["Apellidos"];
    $_SESSION['correo'] = $rows["Correo"];//Casi terminado
      
    echo "1";
    
  }
  elseif ($rows = $consulta2->fetch()) {
    session_start();
    $_SESSION['nombre'] =$rows["Nombre"];
    $_SESSION['apellidos'] =$rows["Apellidos"];
    $_SESSION['correo'] = $rows["Correo"];//Casi terminado
      
    echo "1";
  }
  
  else{
      
    
    echo "3";
   // echo $insertar;
  } 
  

?>