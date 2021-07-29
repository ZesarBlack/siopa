<?php

class Login
{

	function validarUsr($usuario, $contraseña)
	{
		$key = md5($contraseña."usrHSCSPCP");//se crea la llave con la contraseña
		$pass = crypt($contraseña,$key);//crea un contradeña usando el dato del usuario y la llave
		//return $pass;
		//--------------------------------usuario de prueba
		session_name('ACADEMIAHSCSPCP');
		session_start();
		$_SESSION['usuario'] = "administrador";
		$_SESSION['apellidoP'] = "root";
		$_SESSION['apellidoM'] = "root";
		$_SESSION['rol'] = 1;
		return 1;
		//--------------------------------/usuario de prueba
/*
		include('../requires/conexion.php');

		$query_clas = "SELECT * FROM usuarios_cat WHERE usr = '$usuario' AND 	pass='$pass'";
		$resultado = $conn->query($query_clas);


		if ($ver=mysqli_fetch_row($resultado))
				{
				session_name('ACADEMIAHSCSPCP');
				session_start();
				$_SESSION['usuario'] = $ver[1];
				$_SESSION['apellidoP'] = $ver[2];
				$_SESSION['apellidoM'] = $ver[3];
				$_SESSION['rol'] = $ver[9];
				return 1;

				}else
					{
				return 0;
					exit();
				}
				*/
	}
/*
	function validarcadete($ncontrol)
	{
		include('../requires/conexion.php');
		$conn->query("SET CHARACTER SET 'utf8'");
		$query_cadete="SELECT * FROM cadete WHERE idCadete = '$ncontrol'";
		$resultado_cadete = $conn->query($query_cadete);

		if($ver=mysqli_fetch_row($resultado_cadete))
		{
			session_start();
			$_SESSION['id'] = $ver[0];
			$_SESSION['usuario'] = $ver[6];
			$_SESSION['apellidoP'] = $ver[4];
			$_SESSION['apellidoM'] = $ver[5];
			$_SESSION['rol'] = "6";
			return 1;
		}else {
			return 0;
			exit();
		}
	}
*/
	function getpass($contraseña)
	{
		$key = md5($contraseña."usrHSCSPCP");//se crea la llave con la contraseña
		$pass = crypt($contraseña,$key);//crea un contradeña usando el dato del usuario y la llave
		return $pass;
	}
}
$usuario = new Login();
/*
if (isset($_POST['txtcadete'])) {
	$usr = $usuario->validarcadete($_POST['txtcadete']);
	echo $usr;
	if ($usr == 1) {
		header("Location: ../paginas/inicio/home.php");
	}else {
		header("Location: ../index.php");
	}

}
*/
if (isset($_POST['txtusuario']) && isset($_POST['txtpass'])) {
	$usr = $usuario->validarUsr($_POST['txtusuario'], $_POST['txtpass']);
	//echo $usr;
	//echo $_SESSION['rol'];
	if ($usr == 1) {
	 	 header("Location: ../paginas/inicio/home.php");
	}else {
		header("Location: ../index.php");
	}
	/*
	if ($usr == 1) {
		header("Location: ../paginas/inicio/home.php");
	}else {
		header("Location: ../index.php");
	}*/
}
		//$usuario = new Login();
		//$password = $usuario->getpass($_POST['txtpass']);
		//echo $password;



?>
