<?php
    date_default_timezone_set("America/Mexico_City");
    $fecha=date("Y-m-d");
    include("conexionBd.php");
    $indice=0;
    $in=0;
    $medicosCat=NULL;
    
    $sqlMedicos="SELECT IdMedico, Nombre, Apellidos FROM medicos";
    $consulta=$conne->query($sqlMedicos);
    while ($row = $consulta->fetch()){
      $medicosCat[$indice]              =new stdClass;
      $medicosCat[$indice]->id          =$row["IdMedico"];
      $medicosCat[$indice]->nombre =$row["Nombre"];
      $medicosCat[$indice]->apellido =$row["Apellidos"];
      $indice++;
    }
    //Select horario
    $sql="SELECT horarioscat.idHorario, horarioscat.descripcion FROM `horarioscat` ";
 
    //echo $sql;
    $indice2=0;
    $horario=NULL;
    $consulta2=$conne->query($sql);
    while ($row = $consulta2->fetch()){
      $horario[$indice2]              =new stdClass;
      $horario[$indice2]->id          =$row["idHorario"];
      $horario[$indice2]->descripcion =$row["descripcion"];
      $indice2++;
    }
      


?>
