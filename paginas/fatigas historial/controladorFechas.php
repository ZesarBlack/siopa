<?php
include '../../requires/conexion.php';
$FichaI = $_POST['FechaI']; 
$FechaF = $_POST['FechaF'];

if($FichaI<=$FechaF){
	 
	$Query = "SELECT * FROM  fatigas WHERE fecha BETWEEN '$FichaI' AND '$FechaF'";
	$Resul = $db->query($Query);
	 
	$Datos =  array();
	
	if($Resul ){
		
		if(mysqli_num_rows($Resul)>0){
			
		while ($row=mysqli_fetch_array($Resul)) {
			
			$Datos[] = array(
				'idturno' => $row['idturno'],
				'base' => $row['base'],
				'escolta'= $row['escolta'],
				'tierra'= $row['tierra'],
				'francos'= $row['francos'],
				'comisionados'= $row['comisionados'],
				'curso'= $row['curso'],
				'ctrlConfianza'= $row['ctrlConfianza'],
				'suspendidos'= $row['supendidos'],
				'bajas'= $row['bajas'],
				

			);
			
		}
		
		$DatosString = json_encode($Datos);
		echo $DatosString;
	}else{
		 
		echo 1;
	}
	}else{

		 
		die("error en la base de datos".$db->error);
	}

}else{
	
	echo 4;
}
?>