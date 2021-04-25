<?php
if (!isset($_POST['enviar'])) {
    exit();
}

include 'db/connection.php';

$nombre = $_POST['txtNombre'];
$apellidos = $_POST['txtApellidos'];
$Curp = $_POST['txtCurp'];
$Domicilio = $_POST['txtDomicilio'];
$fecha = $_POST['txtFecha'];
$correo = $_POST['txtCorreo'];
$contrasena = $_POST['txtContrasena'];
$contrasena2 = $_POST['txtContrasena'];
$foto = $_POST['txtfoto'];


$sentencia = $bd->prepare("INSERT INTO alumno(ap_paterno,ap_materno,nombre,ex_parcial,ex_final) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$paterno,$materno,$nombre,$parcial,$final]);

if ($resultado === TRUE) {
    //echo "Insertado correctamente";
    header('Location: index.php');
}else{
    echo "Error";
}


?>