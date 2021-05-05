<?php
    include("../../models/conexionBd.php");
    $array=null;
    $correo=$_SESSION['correo'];
    
    $sqlCon="SELECT * FROM usuarios WHERE Correo='$correo' ";
    $sqlCon2="SELECT * FROM medicos WHERE Correo='$correo' ";
    
    $consulta=$conne->query($sqlCon);
    $consulta2=$conne->query($sqlCon2);
    if ($rows = $consulta->fetch()) {
     
        $nombre=$rows["Nombre"]==""?"":$rows["Nombre"];
        $apellido =$rows["Apellidos"]==""?"":$rows["Apellidos"];
        $correo = $rows["Correo"]==""?"":$rows["Correo"];//Casi terminado
        $curp=$rows["Curp"]==""?"":$rows["Curp"]; 
        $domicilio=$rows["Domicilio"]==""?"":$rows["Domicilio"];
        $fecha=$rows["FechaNacimiento"]==""?"":$rows["FechaNacimiento"];

        
        
      }
      elseif ($rows = $consulta2->fetch()) {
        $nombre=$rows["Nombre"]==""?"":$rows["Nombre"];
        $apellido =$rows["Apellidos"]==""?"":$rows["Apellidos"];
        $correo = $rows["Correo"]==""?"":$rows["Correo"];//Casi terminado
        $curp=$rows["Curp"]==""?"":$rows["Curp"]; 
        $domicilio=$rows["Domicilio"]==""?"":$rows["Domicilio"];
        $fecha=$rows["FechaNacimiento"]==""?"":$rows["FechaNacimiento"];
      }
         

?>