<?php
  require 'conexion.php';
	$conn =  conectarBDSIIA();
	$connn =  conectarDB();
	$NumControl=322916;

	$query1="SELECT * FROM Datos_personales da WHERE da.No_ControlMunicipio='".$NumControl."'";
	$result1=odbc_exec($conn,$query1);
	if (odbc_num_rows($result1) > 0)
				{
				while ($row1=odbc_fetch_array($result1))
					{
					var_dump($row1);
					}
				}

	//odbc_close($conn);
?>
