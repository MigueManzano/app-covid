<?php
  include("conexionBd.php");
  $medico  =(isset($_POST['medico'])  and trim($_POST['medico'])!="")  ? $_POST['medico']:"";
  $fecha=(isset($_POST['fecha'])   and trim($_POST['fecha'])!="")   ? $_POST['fecha']:""; 
  $act   = 'A';//a= activo B=baja*
  $sql="SELECT horarioscat.idHorario, horarioscat.descripcion FROM `horarioscat` WHERE  horarioscat.IdHorario NOT IN(SELECT citas.IdHorario FROM citas WHERE citas.IdMedico='$medico' and citas.FechaCita='$fecha')";
 
    //echo $sql;
    $indice2=0;
    $horario=NULL;
    $consulta=$conne->query($sql);
    while ($row = $consulta->fetch()){
      $horario[$indice2]              =new stdClass;
      $horario[$indice2]->id          =$row["idHorario"];
      $horario[$indice2]->descripcion =$row["descripcion"];
      $indice2++;
    }
    echo json_encode($horario);
?> 