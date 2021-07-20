<?php /**
 *
 */
class Fotos
{

  public function verificarPersonalSIIA()
  {
    $server='172.18.0.29';
  	$link2 =  sqlsrv_connect($server, 'sa', '@0X$4Z8%6I2E');
  	mssql_select_db('SIIA', $link2);

      $control = fopen("txtNOCONTROL.txt", "r");
      //echo $control;
      if ($control) {
          while (($n_control = fgets($control, 4096)) !== false) {
          $num_control = intval($n_control);

          //---------------------------------------------------------------------
          $query1="SELECT * FROM Datos_personales da WHERE da.No_ControlMunicipio ='$num_control' AND da.Tipo_Status=1";
          $result1=mssql_query($query1,$link2);
          if (mssql_num_rows($result1) > 0){
                while ($row1=mssql_fetch_array($result1))
                  {

                  $query_fotos="SELECT * FROM fotos fo  WHERE fo.id_empleado='$row1[0]'";
                  $result_fotos=mssql_query($query_fotos,$link2);
                  if (mssql_num_rows($result_fotos) > 0){
                    $id_empleado = trim($row1[1]);
                    $ruta='C:/operativos/23-04-21/'.$id_empleado.'.JPG';
/*
                    //echo $ruta;
                    echo $row1[0];
                    echo "hay foto  ";
                    echo $row1[24]." ".$row1[25]."".$row1[26];
                    echo " ";
                    echo $row1[1];
                    echo "<br>";
*/
                    $query_subir="UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";
                  //  echo $query_subir;
                    //echo "<br>";
                    //mssql_query($query_subir,$link2);
                 }else {
                   $id_empleado = trim($row1[1]);
                   $ruta='C:/operativos/23-04-21/'.$id_empleado.'.JPG';
                    echo $ruta;

                    echo $row1[0];
                    echo "no hay foto  ";
                    echo $row1[24]." ".$row1[25]."".$row1[26];
                    echo "  ";
                    echo $row1[1];
                    echo "<br>";

                   //$query_subir="INSERT INTO fotos (foto) VALUES (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";
                   $query_subir="INSERT INTO fotos(id_empleado,TipoEmpleado,foto) VALUES($row1[0],'M','')";

                   echo $query_subir;
                   echo "<br>";
                   //mssql_query($query_subir,$link2);
                 }
                  }
              }
          //---------------------------------------------------------------------
          }
          sqlsrv_close($link2);
          if (!feof($control)) {
                echo "Error: fallo inesperado de fgets()\n";
          }
          fclose($control);
      }
  }


  public function verificarPersonalSIIAFORTAMUN()
  {
    $server='172.18.0.29';
    $link2 =  mssql_connect($server, 'sa', '@0X$4Z8%6I2E');
    mssql_select_db('SIIA-FORTAMUN', $link2);

      $control = fopen("txtNOCONTROL.txt", "r");
      //echo $control;
      if ($control) {
          while (($n_control = fgets($control, 4096)) !== false) {
          $num_control = intval($n_control);

          //---------------------------------------------------------------------
          $query1="SELECT * FROM Datos_personales da WHERE da.No_ControlMunicipio ='$num_control' AND da.Tipo_Status=1";
          $result1=mssql_query($query1,$link2);
          if (mssql_num_rows($result1) > 0){
                while ($row1=mssql_fetch_array($result1))
                  {

                  $query_fotos="SELECT * FROM fotos fo  WHERE fo.id_empleado='$row1[0]'";
                  $result_fotos=mssql_query($query_fotos,$link2);
                  if (mssql_num_rows($result_fotos) > 0){
                    $id_empleado = trim($row1[1]);
                    $ruta='C:/operativos/23-04-21/'.$id_empleado.'.JPG';

                    //echo $ruta;
                    echo $row1[0];
                    echo "hay foto  ";
                    echo $row1[24]." ".$row1[25]."".$row1[26];
                    echo " ";
                    echo $row1[1];
                    echo "<br>";

                    $query_subir="UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";
                    echo $query_subir;
                    echo "<br>";
                    //mssql_query($query_subir,$link2);
                 }else {
                   $id_empleado = trim($row1[1]);
                   $ruta='C:/operativos/23-04-21/'.$id_empleado.'.JPG';
                    echo $ruta;
                    echo $row1[0];
                    echo "no hay foto  ";
                    echo $row1[24]." ".$row1[25]."".$row1[26];
                    echo "  ";
                    echo $row1[1];
                    echo "<br>";
                   //$query_subir="INSERT INTO fotos (foto) VALUES (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";
                   $query_subir="INSERT INTO fotos(id_empleado,TipoEmpleado,foto) VALUES($row1[0],'M','')";
                   //echo $query_subir;
                   //echo "<br>";
                   //mssql_query($query_subir,$link2);
                 }
                  }
              }
          //---------------------------------------------------------------------
          }
          sqlsrv_close($link2);
          if (!feof($control)) {
                echo "Error: fallo inesperado de fgets()\n";
          }
          fclose($control);
      }
  }
}
 $foto = new Fotos();
 $foto->verificarPersonalSIIA();
 $foto->verificarPersonalSIIAFORTAMUN();
 ?>
