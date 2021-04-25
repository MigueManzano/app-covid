<?php
  include("conexionBd.php");
  date_default_timezone_set("America/Mexico_City");
  $fechaActual=date("Y-m-d");
  $medico  =(isset($_POST['medico'])  and trim($_POST['medico'])!="")  ? $_POST['medico']:"";
  $fecha=(isset($_POST['fecha'])   and trim($_POST['fecha'])!="")   ? $_POST['fecha']:""; 
  $horario=(isset($_POST['horario'])   and trim($_POST['horario'])!="")   ? $_POST['horario']:""; 
  $usuario="1";//cuando este la session se pone
  
  $act   = 'A';//a= activo B=baja*/

  $sqlCon="SELECT * FROM citas WHERE IdMedico='$medico' and FechaCita='$fecha' and IdHorario='$horario'";
  $consulta=$conne->query($sqlCon);
  if ($consulta->fetchColumn() > 0) { 
   // echo "Este cliente ya existe";
    echo "1";
    
  }else{
    //echo"2";
    $insertar = "INSERT INTO citas (IdUsuario, IdMedico,FechaCita, IdHorario, CodigoCita, FechaCreacion, Estatus) 
                VALUES('$usuario','$medico','$fecha','$horario', '123','$fechaActual', '$act')";  
    //echo $insertar;
    $insert=$conne->query($insertar);
    echo "0";
   // echo $insertar;
  } 
  
?> 