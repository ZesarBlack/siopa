<?php


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
	//rescata la información del archivo y el nobre del usario
			$nombre = $_POST["nombre"];
			$file = $_FILES["file"]["name"];
			$filetype = $_FILES["file"]["type"];
			$filesize = $_FILES["file"]["size"];

			//comprueb si la carpeta existe
			if(!is_dir("$nombre/"))
			{
				//si no existe crea una carpeta con el nombre del usuario y los peromisos 777
							mkdir("$nombre/", 0777);
			}
			if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "$nombre/".$file))
			{
				//se crea la coneccion
				$conn = new mysqli("localhost", "root", "", "dropzone");
				//se crea la copnsulta para la insercion
				$sql = "INSERT INTO uploads (name, type, size) VALUES ('$file', '$filetype', '$filesize')";
				$conn->query($sql);
				//se cierra la coneccion
				$conn->close();
			}
}
