<?php

/**
 *
 */
class Personal
{

	function cambiarEstatus($id)
	{
		include '../../requires/conexion.php';
//-------selcciona para onservar el estatus actual del personal
		$query_estatus= "SELECT * FROM persona WHERE idpersona = '$id'";
		$resultado = $conn->query($query_estatus);
		$ver=mysqli_fetch_row($resultado);
		$esta= $ver[15];

//seleccion if para hacer el cabion de estado correspondiente
	if($esta=="Activo") {
		$query="UPDATE persona set estatus='Inactivo' where idpersona='$id'";
		$resultado = $conn->query($query);
	}elseif($esta=="Inactivo"){
		$query="UPDATE persona set estatus = 'Activo' where idpersona='$id'";
		$resultado = $conn->query($query);
	}

	}
	function cambiarEstado($id)
	{
// seleccion para observar el estado actual del personal
		include '../../requires/conexion.php';
		$query_estado="SELECT estado FROM persona WHERE idpersona ='$id'";
		$resultado_estado=$conn->query($query_estado);
		$ver=mysqli_fetch_row($resultado_estado);
		$esta= $ver[0];

		//echo $resultado_estado;

//selccion if para hacer el cambio de esta
		if ($esta=="Activo") {
			$queryc="UPDATE persona set estado='Baja' where idpersona='$id'";
			$resultado = $conn->query($queryc);
		}elseif ($esta=="Baja"){
			$queryc="UPDATE persona set estado='Reingreso' where idpersona='$id'";
			$resultado = $conn->query($queryc);
		}elseif ($esta=="Reingreso") {
			$queryc="UPDATE persona set estado='Baja' where idpersona='$id'";
			$resultado = $conn->query($queryc);
		}
		return $esta;
	}

	function obtenerPersona()
	{
		include '../../requires/conexion.php';
		$query_persona="SELECT * FROM persona";
		$resultado_persona=$conn->query($query_persona);
		while ($verdatos=mysqli_fetch_row($resultado_persona)) {
			//se revisa ele estado actual del personal
			if ($verdatos[14] == "Baja") {
					$boton= '<button class="btn btn-danger glyphicon glyphicon-remove" disabled="disabled">  inhabilitado</button>';
					$verdatos[15]="no disponible";
			}else {
				if ($verdatos[15] == "Activo") {
					$boton= '<button class="btn btn-danger glyphicon" onclick="Actualizar_estatus('.$verdatos[0].')">Cambiar Inactivo</button>';
				}elseif ($verdatos[15] == "Inactivo") {
					$boton= '<button class="btn btn-primary glyphicon" onclick="Actualizar_estatus('.$verdatos[0].')">Cambiar Activo</button>';
				}
			}

			if ($verdatos[14] == "Activo") {
				$boton2= '<button class="btn btn-danger glyphicon" onclick="Actualizar_estado('.$verdatos[0].')">Dar Baja</button>';
			}elseif ($verdatos[14] == "Baja") {
				$boton2= '<button class="btn btn-primary glyphicon" onclick="Actualizar_estado('.$verdatos[0].')">Reingresar</button>';
			}elseif ($verdatos[14] == "Reingreso") {
				$boton2= '<button class="btn btn-danger glyphicon" onclick="Actualizar_estado('.$verdatos[0].')">Dar Baja</button>';
			}

			echo '
			<tr>
			<td> '.$verdatos[0].'</td>
			<td> '.$verdatos[1].'</td>
			<td> '.$verdatos[2].'</td>
			<td> '.$verdatos[3].'</td>
			<td> '.$verdatos[10].'</td>
			<td> '.$verdatos[11].'</td>
			<td> '.$verdatos[12].'</td>
			<td> '.$verdatos[13].'</td>
			<td> '.$verdatos[15].'</td>
			<td> '.$boton.'</td>
			<td> '.$verdatos[14].'</td>
			<td> '.$boton2.'</td>
			<td> '.$verdatos[16].'</td>
			</tr>
			';
		}
	}
}

	$persona = new Personal();

if (isset($_POST['id_estado'])) {
	$estado = $persona->cambiarEstado($_POST['id_estado']);

}elseif (isset($_POST['id_estatus'])) {
	$persona->cambiarEstatus($_POST['id_estatus']);
	//echo "hello";
}



 ?>
