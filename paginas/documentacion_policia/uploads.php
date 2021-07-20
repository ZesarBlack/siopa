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
	public function subirArchivo($cuip,$archivo,$temp_archivo)
	{
		//---------------------------------------------------------------------------
		require '../../requires/conexion.php';
			$arrContextOptions=array(
					"ssl"=>array(
							'method'=>"GET",
							"verify_peer"=>false,
							"verify_peer_name"=>false,
					),
			);

			$response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$cuip, true, stream_context_create($arrContextOptions));
			$policia = json_decode($response);
			$curp = $policia[0]->curp;
		//---------------------------------------------------------------------------
		require '../../requires/conexion.php';
		$path="../../archivos_policia/$curp";
		if(!is_dir($path))
		{
			//si no existe crea una carpeta con el nombre del usuario y los peromisos 777
			//mkdir($path, 0777);
			$old = umask(0);
			mkdir($path,0777);
			umask($old);
			move_uploaded_file($temp_archivo, "../../archivos_policia/$curp/".$archivo);
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp, cuip) VALUES ( '$archivo', '../../archivos_policia/$curp', 'policia', '$curp', '$cuip')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
		if($archivo && move_uploaded_file($temp_archivo,  "../../archivos_policia/$curp/".$archivo))
		{
			$sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp, cuip) VALUES ( '$archivo', '../../archivos_policia/$curp', 'policia', '$curp','$cuip')";
			$conn->query($sql);
			//se cierra la coneccion
			$conn->close();
		}
	}
	//-------------------------------------------------------------elimina el archivo  subido
	public function bajaArchivo($cuip, $archivo)
	{
		//---------------------------------------------------------------------------
		require '../../requires/conexion.php';
			$arrContextOptions=array(
					"ssl"=>array(
							'method'=>"GET",
							"verify_peer"=>false,
							"verify_peer_name"=>false,
					),
			);

			$response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$cuip, true, stream_context_create($arrContextOptions));
			$policia = json_decode($response);
			$curp = $policia[0]->curp;
		//---------------------------------------------------------------------------
		require '../../requires/conexion.php';
		$path='../../archivos_policia/'.$curp;
		if(file_exists("../../archivos_policia/$curp/".$archivo))
		{
			//alimina el archivo de la carpeta
			unlink("../../archivos_policia/$curp/".$archivo);
			//se crea la copnsulta para la insercion
			$sql = "DELETE FROM documentos WHERE nombre = '$archivo' AND ruta = '$path'";
			$conn->query($sql);
			//se cierra la conexion
			$conn->close();
		}
		echo "Archivo ".$archivo." eliminado";
	}
	//---------------------------------------------------------comprobar existencia de elemento
	public function buscarElemento($curp)
	{
	require '../../requires/conexion.php';
		$arrContextOptions=array(
				"ssl"=>array(
						'method'=>"GET",
						"verify_peer"=>false,
						"verify_peer_name"=>false,
				),
		);

		$response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$curp, true, stream_context_create($arrContextOptions));
		$policia = json_decode($response);
		//var_dump($policia);
		if (isset($policia) && $curp !="") {
			echo $policia[0]->nombre;
			echo "<br>";
			echo $policia[0]->cuip;
			echo "<br>";
			echo $policia[0]->no_control;
			//echo  $policia->{'curp'};
		}else {
			echo 0;
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
