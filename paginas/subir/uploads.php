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
	public function subirArchivo($curp,$archivo,$temp_archivo)
	{
		require '../../requires/conexion.php';

		$path="../../archivos_cadetes/$curp";
		if(!is_dir($path))
		{
			//si no existe crea una carpeta con el nombre del usuario y los peromisos 777
			//mkdir($path, 0777);
			$old = umask(0);
			mkdir($path,0777);
			umask($old);
			move_uploaded_file($temp_archivo, "../../archivos_cadetes/$curp/".$archivo);
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp) VALUES ( '$archivo', '../../archivos_cadetes/$curp', 'cadete', '$curp')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
		if($archivo && move_uploaded_file($temp_archivo,  "../../archivos_cadetes/$curp/".$archivo))
		{
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp) VALUES ( '$archivo', '../../archivos_cadetes/$curp', 'cadete', '$curp')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
	}
	//-------------------------------------------------------------elimina el archivo  subido
	public function bajaArchivo($curp, $archivo)
	{
		require '../../requires/conexion.php';
		$path="../../archivos_cadetes/$curp";
		if(file_exists("../../archivos_cadetes/$curp/".$archivo))
		{
			//alimina el archivo de la carpeta
			unlink("../../archivos_cadetes/$curp/".$archivo);
			//se crea la copnsulta para la insercion
			$sql = "DELETE FROM documentos WHERE nombre = '$archivo' AND ruta = '$path'";
			$conn->query($sql);
			//se cierra la conexion
			$conn->close();
		}
		echo "El archivo ha sido eliminado";
	}
	//---------------------------------------------------------comprobar existencia de elemento
	public function buscarElemento($curp)
	{
	require '../../requires/conexion.php';
			$query_b = "SELECT curp FROM cadete WHERE curp = '$curp' ";
			$resultado = $conn->query($query_b);
			$policia = mysqli_fetch_array($resultado);

			if ($policia==NULL) {
				//echo $query_b;
				echo "¡INGRESE CURP VALIDO!";
			}else {
				//echo $query_b;
				echo 1;

			}

	}
	//--------------------------------------------------------/funciones
}

$documento = NEW Documentos();

if (isset($_POST["nombre"])&& isset($_FILES["file"]["name"]) && isset($_FILES["file"]["tmp_name"])) {
		$documento -> subirArchivo($_POST["nombre"],$_FILES["file"]["name"], $_FILES["file"]["tmp_name"]);
		//echo $_POST["tipo2"];
}
if (isset($_GET["delete"]) && $_GET["delete"] == true) {
	  $documento -> bajaArchivo($_POST["nombre2"], $_POST["filename"]);
}
if (isset($_POST["curp_busq"])) {
	  $documento->buscarElemento($_POST["curp_busq"]);
}

?>
