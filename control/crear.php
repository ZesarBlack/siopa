<?php
include('../conexion.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];
echo "$pass";
echo "$usuario";
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO

if (empty($usuario) | empty($pass))
	{
	header("Location: ../index.html");
	exit();
	}

//VALIDANDO EXISTENCIA DEL USUARIO

//$sql = mysqli_query("SELECT * from usuarios where nombre = '$usuario' and contraseña = '$pass' ");
$query = "INSERT INTO usuarios_cat (nombre, pass) VALUES('$usuario', '$pass')";
$resultado = $conn->query($query);


$query_clas = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND 	password='$pass' ";
$resultado = $conn->query($query_clas);

//echo "$query";
header("Location: ../index.html");
exit();

}
?>
