<?php

include '../../requires/conexion.php';

$idUsuario=$_POST['idUsuario'];
$nom=$_POST['nom'];
$pat=$_POST['pat'];
$mat=$_POST['mat'];
$usuar=$_POST['usuario'];
//$rol=$_POST['registro'];
$pass=$_POST['contras'];
$email=$_POST['email'];
//$create_time=$_POST['fecha'];


echo $idUsuario."<br>";

echo $nom."<br>";
echo $pat."<br>";
echo $mat."<br>";
echo $usuar."<br>";
echo $pass."<br>";
echo $email."<br>";
//echo $rol."<br>";

$hoy = date("Y")."-".date("m")."-".date("d");
//echo $hoy;
if ($nom=="Administrador") {
  header('location: adminusuarios.php');
}elseif ($pass == "" ) {
  $query="UPDATE usuarios_cat SET nombre='$nom', ap_paterno='$pat',ap_materno='$mat', usr='$usuar' ,email='$email',update_time='$hoy' WHERE idUsuario='$idUsuario'";
}else {
  $key = md5($pass."usrHSCSPCP");//se crea la llave con la contraseña
  $password=crypt($pass,$key);//crea un contradeña usando el dato del usuario y la llave
  $query ="UPDATE usuarios_cat SET nombre='$nom', ap_paterno='$pat',ap_materno='$mat', usr='$usuar' ,pass='$password',email='$email',update_time='$hoy' WHERE idUsuario='$idUsuario'";
}

//$coms="UPDATE usuarios_cat SET nombre='$nom', ap_paterno='$pat',ap_materno='$mat', usr='$usuar' ,roles_idrol=$rol,pass='$pass',email='$email',update_time='$hoy' WHERE idUsuario='$idUsuario'";
//echo $coms;
$consulta=mysqli_query($conn,$query);
header('location: adminusuarios.php');
//echo $query;
?>
