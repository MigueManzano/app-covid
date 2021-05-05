<?php  
  include("conexionBd.php");
  $resu=false;
  $nombre  =(isset($_POST['nombre'])  and trim($_POST['nombre'])!="")  ? $_POST['nombre']:"";
  $fecha  =(isset($_POST['fecha'])  and trim($_POST['fecha'])!="")  ? $_POST['fecha']:"";
  $apellidos  =(isset($_POST['apellidos'])  and trim($_POST['apellidos'])!="")  ? $_POST['apellidos']:"";
  $curp  =(isset($_POST['curp'])  and trim($_POST['curp'])!="")  ? $_POST['curp']:"";
  $domicilio  =(isset($_POST['domicilio'])  and trim($_POST['domicilio'])!="")  ? $_POST['domicilio']:"";

  $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', matricula='$matricula'  WHERE id=$id";
  $consulta=$conne->query($sql);
  $resu=true;
 	return $resu;
  ;?>