<?php

include '../../requires/conexion.php';
$idpersona=$_POST['idpersona'];
$sita=$_POST['sita'];
$consulta=mysqli_query($conn,"UPDATE persona SET  situacion_actual='$sita' WHERE idpersona='$idpersona'");
header('location: reingreso.php');
?>
