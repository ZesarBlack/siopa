<?php

/**
 *
 */
require '../../requires/conexion.php';
/**
 *
 */
class Documentos
{
	//---------------------------------crea la carpeta destino y mueve el archivo a ella
	public function subirArchivo($curp,$archivo,$temp_archivo, $tipo)
	{
		require '../../requires/conexion.php';

		$path="../../archivos/$curp";
		if(!is_dir($path))
		{
			//si no existe crea una carpeta con el nombre del usuario y los peromisos 777
			$old = umask(0); 
			mkdir($path,0777); 
			umask($old); 
			//mkdir($path, 0777);
			move_uploaded_file($temp_archivo, "../../archivos/$curp/".$archivo);
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento) VALUES ( '$archivo', '../../archivos/$curp', '$tipo')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
		if($archivo && move_uploaded_file($temp_archivo,  "../../archivos/$curp/".$archivo))
		{
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento) VALUES ( '$archivo', '../../archivos/$curp', '$tipo')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
	}
	//-------------------------------------------------------------elimina el archivo  subido
	public function bajaArchivo($curp, $archivo)
	{
		require '../../requires/conexion.php';
		$path="[sistema]/archivos/$curp/";
		if(file_exists("../../archivos/$curp/".$archivo))
		{
			//alimina el archivo de la carpeta
			unlink("../../archivos/$curp/".$archivo);
			//se crea la copnsulta para la insercion
			$sql = "DELETE FROM documentos WHERE nombre = '$archivo' AND ruta = '$path'";
			$conn->query($sql);
			//se cierra la conexion
			$conn->close();
		}
		echo "El archivo ha sido eliminado";
	}
	//---------------------------------------------------------comprobar existencia de elemento
	public function buscarElemento($curp, $tipo)
	{
	require '../../requires/conexion.php';
		$arrContextOptions=array(
				"ssl"=>array(
						'method'=>"GET",
						"verify_peer"=>false,
						"verify_peer_name"=>false,
				),
		);

		switch ($tipo) {
			case 'cadete':// en caso de que se un policia se busca en factor humano
			$query_b = "SELECT curp FROM cadete WHERE curp = '$curp' ";
			$resultado = $conn->query($query_b);
			$policia = mysqli_fetch_array($resultado);

			if ($policia==NULL) {
				//echo $query_b;
				//echo "¡INGRESE CURP VALIDO!";
			}else {
				//echo $query_b;
				echo 1;

			}
				break;
			case 'policia': // en caso de ser un cadetese buscará en la base de datpos del sistema
			$response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&curp=".$curp, true, stream_context_create($arrContextOptions));
			$policia = json_decode($response);
			//var_dump($policia);
			if (isset($policia) && $curp !="") {
				echo  1;
			}else {
				//echo "¡INGRESE CURP VALIDO!";
			}
				break;
		}
	}
	//--------------------------------------------------------/funciones
}

$documento = NEW Documentos();

if (isset($_POST["nombre"])&& isset($_FILES["file"]["name"]) && isset($_FILES["file"]["tmp_name"]) && isset($_POST["tipo2"])) {
		$documento -> subirArchivo($_POST["nombre"],$_FILES["file"]["name"], $_FILES["file"]["tmp_name"], $_POST["tipo2"]);
		//echo $_POST["tipo2"];
}
if (isset($_GET["delete"]) && $_GET["delete"] == true) {
	  $documento -> bajaArchivo($_POST["nombre2"], $_POST["filename"]);
}
if (isset($_POST["curp_busq"]) && isset($_POST["tipo"])) {
	  $documento->buscarElemento($_POST["curp_busq"], $_POST["tipo"]);
}
/*
if (isset($_POST["tipo2"])) {
	echo "ok";
}
*/
/*
if(isset($_GET["delete"]) && $_GET["delete"] == true)
{
	//se recibe el nombre de usuario  y el nombre del archivo por ajax
	$name2 = $_POST["nombre2"];
	$name = $_POST["filename"];


//compreba la existencia de una carpeta y si el archivo se encuentra ahí
	if(file_exists("$name2/".$name))
	{
		//alimina el archivo de la carpeta
		unlink("$name2/".$name);
		//se abre la conexion
		$conn = new mysqli("localhost", "root", "", "dropzone");
		//se crea la copnsulta para la insercion
		$sql = "DELETE FROM uploads WHERE name = '$name'";
		$conn->query($sql);
		//se cierra la conexion
		$conn->close();

	}
	else
	{
		echo json_encode(array("res" => false));
	}
}else {
*/
	//rescata la información del archivo y el nobre del usario


			//$CURP = $_POST["nombre"];
			//$file = $_FILES["file"]["name"];
			//$_FILES["file"]["tmp_name"];
			//$filetype = $_FILES["file"]["type"];
			//$filesize = $_FILES["file"]["size"];

			//comprueb si la carpeta existe
			//$path="dsd\wewe\wewe\doc_";
			/*
			$path='archivos\_'.$nombre;
			if(!is_dir($path))
			{
				//si no existe crea una carpeta con el nombre del usuario y los peromisos 777
				mkdir($path, 0777);
			}

			if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "archivos\_$nombre/".$file))
			{
				//se crea la coneccion
				//$result = new mysqli("localhost", "root", "", "dropzone");
				//se crea la copnsulta para la insercion
				//$ruta="archivos\_$nombre/";
				$sql = "INSERT INTO documentos (nombre, ruta) VALUES ( '$file', 'archivos/_$nombre/')";
				$conn->query($sql);
				//se cierra la coneccion

				$conn->close();
			}*/
//}

?>
