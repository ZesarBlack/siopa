<?php
header('Content-Type: text/html; charset=utf-8');
/**
 *
 */
class Fotoss
{

  public	function todos(){
		require 'conexion.php';
	    $conn =  conectarBDSIIA();
	     $connn =  conectarDB();
	      $sql = "SELECT TOP 30 * FROM sweb_academia_SIIA_F  da WHERE da.PuestoRNPSP ='POLICIA'   order by da.Id_Empleado DESC";
	      $res = odbc_exec($conn, $sql);
	      //$haydatos=odbc_num_rows($res);
	      $sql2 = "SELECT TOP 30 * FROM sweb_academia_F  da WHERE da.PuestoRNPSP ='POLICIA'  order by da.Id_Empleado DESC";
	      $res2 = odbc_exec($connn, $sql2);
//---------------------------------------------------------

	        $arreglo= array();
	        while($row = odbc_fetch_array($res)){
	          $row_array['id']=trim(mb_convert_encoding($row['Id_Empleado'], 'utf-8', 'iso-8859-1'));
	          $row_array['no_control']=trim(mb_convert_encoding($row['No_ControlMunicipio'], 'utf-8', 'iso-8859-1'));
		  $row_array['cuip']=trim(mb_convert_encoding($row['CUIP'], 'utf-8', 'iso-8859-1'));
	          $row_array['nombre']=trim(mb_convert_encoding($row['Nombre'], 'utf-8', 'iso-8859-1'));
	          $row_array['nacimiento']=trim(mb_convert_encoding($row['Fecha_Nacimiento'], 'utf-8', 'iso-8859-1'));
	          $row_array['sexo']=trim(mb_convert_encoding($row['Sexo'], 'utf-8', 'iso-8859-1'));
	          $row_array['rfc']=trim(mb_convert_encoding($row['RFC'], 'utf-8', 'iso-8859-1'));
	          $row_array['curp']=trim(mb_convert_encoding($row['CURP'], 'utf-8', 'iso-8859-1'));
	          $row_array['medico']=trim(mb_convert_encoding($row['TipoServiciosMedicos'], 'utf-8', 'iso-8859-1'));
	          $row_array['No_sm']=trim(mb_convert_encoding($row['No_SS'], 'utf-8', 'iso-8859-1'));
	          $row_array['licencia']=trim(mb_convert_encoding($row['No_Licencia'], 'utf-8', 'iso-8859-1'));
	          $row_array['no_cartilla']=trim(mb_convert_encoding($row['No_Cartilla'], 'utf-8', 'iso-8859-1'));
	          $row_array['estado_civil']=trim(mb_convert_encoding($row['Estado_Civil'], 'utf-8', 'iso-8859-1'));
	          $row_array['telefono']=trim(mb_convert_encoding($row['Telefono'], 'utf-8', 'iso-8859-1'));
	          $row_array['movil']=trim(mb_convert_encoding($row['Movil'], 'utf-8', 'iso-8859-1'));
	          $row_array['email']=trim(mb_convert_encoding($row['Email'], 'utf-8', 'iso-8859-1'));
	          $row_array['calle']=trim(mb_convert_encoding($row['Calle'], 'utf-8', 'iso-8859-1'));
	          $row_array['nExterior']=trim(mb_convert_encoding($row['No_Exterior'], 'utf-8', 'iso-8859-1'));
	          $row_array['nInterior']=trim(mb_convert_encoding($row['No_Interior'], 'utf-8', 'iso-8859-1'));
	          $row_array['colonia']=trim(mb_convert_encoding($row['Colonia'], 'utf-8', 'iso-8859-1'));
	          $row_array['cp']=trim(mb_convert_encoding($row['CP'], 'utf-8', 'iso-8859-1'));
	          $row_array['dependecia']=trim(mb_convert_encoding($row['Dependencia'], 'utf-8', 'iso-8859-1'));
	          $row_array['adscripcion']=trim(mb_convert_encoding($row['AdscripCom'], 'utf-8', 'iso-8859-1'));
	          $row_array['area_com']=trim(mb_convert_encoding($row['AreaCom'], 'utf-8', 'iso-8859-1'));
	          $row_array['cat_area_depto ']=trim(mb_convert_encoding($row['CatAreaDepto'], 'utf-8', 'iso-8859-1'));
	          $row_array['cat_comisionado']=trim(mb_convert_encoding($row['CatComisionado'], 'utf-8', 'iso-8859-1'));
		  $row_array['estatus']=trim(mb_convert_encoding($row['Tipo_Status'], 'utf-8', 'iso-8859-1'));
	          $row_array['funcion']=trim(mb_convert_encoding($row['Funcion'], 'utf-8', 'iso-8859-1'));
	          $row_array['PuestoRNPSP']=trim(mb_convert_encoding($row['PuestoRNPSP'], 'utf-8', 'iso-8859-1'));
	          array_push($arreglo,$row_array);
	        }
	        while($row = odbc_fetch_array($res2)){
	          $row_array['id']=trim(mb_convert_encoding($row['Id_Empleado'], 'utf-8', 'iso-8859-1'));
	          $row_array['no_control']=trim(mb_convert_encoding($row['No_ControlMunicipio'], 'utf-8', 'iso-8859-1'));
		  $row_array['cuip']=trim(mb_convert_encoding($row['CUIP'], 'utf-8', 'iso-8859-1'));
	          $row_array['nombre']=trim(mb_convert_encoding($row['Nombre'], 'utf-8', 'iso-8859-1'));
	          $row_array['nacimiento']=trim(mb_convert_encoding($row['Fecha_Nacimiento'], 'utf-8', 'iso-8859-1'));
	          $row_array['sexo']=trim(mb_convert_encoding($row['Sexo'], 'utf-8', 'iso-8859-1'));
	          $row_array['rfc']=trim(mb_convert_encoding($row['RFC'], 'utf-8', 'iso-8859-1'));
	          $row_array['curp']=trim(mb_convert_encoding($row['CURP'], 'utf-8', 'iso-8859-1'));
	          $row_array['medico']=trim(mb_convert_encoding($row['TipoServiciosMedicos'], 'utf-8', 'iso-8859-1'));
	          $row_array['No_sm']=trim(mb_convert_encoding($row['No_SS'], 'utf-8', 'iso-8859-1'));
	          $row_array['licencia']=trim(mb_convert_encoding($row['No_Licencia'], 'utf-8', 'iso-8859-1'));
	          $row_array['no_cartilla']=trim(mb_convert_encoding($row['No_Cartilla'], 'utf-8', 'iso-8859-1'));
	          $row_array['estado_civil']=trim(mb_convert_encoding($row['Estado_Civil'], 'utf-8', 'iso-8859-1'));
	          $row_array['telefono']=trim(mb_convert_encoding($row['Telefono'], 'utf-8', 'iso-8859-1'));
	          $row_array['movil']=trim(mb_convert_encoding($row['Movil'], 'utf-8', 'iso-8859-1'));
	          $row_array['email']=trim(mb_convert_encoding($row['Email'], 'utf-8', 'iso-8859-1'));
	          $row_array['calle']=trim(mb_convert_encoding($row['Calle'], 'utf-8', 'iso-8859-1'));
	          $row_array['nExterior']=trim(mb_convert_encoding($row['No_Exterior'], 'utf-8', 'iso-8859-1'));
	          $row_array['nInterior']=trim(mb_convert_encoding($row['No_Interior'], 'utf-8', 'iso-8859-1'));
	          $row_array['colonia']=trim(mb_convert_encoding($row['Colonia'], 'utf-8', 'iso-8859-1'));
	          $row_array['cp']=trim(mb_convert_encoding($row['CP'], 'utf-8', 'iso-8859-1'));
	          $row_array['dependecia']=trim(mb_convert_encoding($row['Dependencia'], 'utf-8', 'iso-8859-1'));
	          $row_array['adscripcion']=trim(mb_convert_encoding($row['AdscripCom'], 'utf-8', 'iso-8859-1'));
	          $row_array['area_com']=trim(mb_convert_encoding($row['AreaCom'], 'utf-8', 'iso-8859-1'));
	          $row_array['cat_area_depto ']=trim(mb_convert_encoding($row['CatAreaDepto'], 'utf-8', 'iso-8859-1'));
	          $row_array['cat_comisionado']=trim(mb_convert_encoding($row['CatComisionado'], 'utf-8', 'iso-8859-1'));
	          $row_array['funcion']=trim(mb_convert_encoding($row['Funcion'], 'utf-8', 'iso-8859-1'));
	  	  $row_array['estatus']=trim(mb_convert_encoding($row['Tipo_Status'], 'utf-8', 'iso-8859-1'));
	          $row_array['PuestoRNPSP']=trim(mb_convert_encoding($row['PuestoRNPSP'], 'utf-8', 'iso-8859-1'));
	          array_push($arreglo,$row_array);
	        }
	        odbc_free_result($res);
	        odbc_free_result($res2);
	        odbc_close($conn);
	        odbc_close($connn);
	        //return json_encode($arreglo,JSON_UNESCAPED_UNICODE);
	        //return json_encode($arreglo1,JSON_UNESCAPED_UNICODE);
					var_dump($arreglo);
	    }
}

$foto = new Fotoss();
$foto->todos();

?>
