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

    


?>
