<?php
/**
 *
 */

class ControlConf
{
  public function obtenerConfianza()
  {
    include '../../requires/conexion.php';
    $query_conf="SELECT folio, curp, nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento, n_oficio, progra_eva, result_eva, n_oce, fecha_emision_result, asis_c3, observacion  FROM control_conf_cad as ccc INNER JOIN cadete as cad ON cad.idCadete = ccc.id_cadete";
    //$conn->query("SET CHARACTER SET 'utf8'");
    $resultado_conf=$conn->query($query_conf);
    while ($datos=mysqli_fetch_row($resultado_conf)) {
      echo
            '<tr>
               <td>'.$datos[0].'</td>
               <td>'.$datos[1].'</td>
               <td>'.$datos[2].'</td>
               <td>'.$datos[3].'</td>
               <td>'.$datos[4].'</td>
               <td>'.$datos[5].'</td>
               <td>'.$datos[6].'</td>
               <td>'.$datos[7].'</td>
               <td>'.$datos[10].'</td>
               <td>'.$datos[8].'</td>
               <td>'.$datos[9].'</td>
               <td>'.$datos[11].'</td>
               <td>'.$datos[12].'</td>
               <td>'.$datos[13].'</td>
               <td>'.$datos[14].'</td>
             </tr>
            ';
    }
  }
  public function actualizarControl($id , $oficio, $fecha, $resultado, $oficio_ce, $fecha_resultado, $asis, $observacion)
  {
    include '../../requires/conexion.php';

    $query_r="SELECT * FROM control_conf_cad WHERE id_cadete ='$id' ";
    $res = $conn->query($query_r);
    echo $query_r;

    if (empty($d=mysqli_fetch_row($res))) {
      // code...
      $query_act="INSERT INTO control_conf_cad(id_cadete ,n_oficio, progra_eva, result_eva, n_oce, fecha_emision_result, asis_c3, observacion) values ($id , '$oficio', '$fecha', '$resultado', '$oficio_ce', '$fecha_resultado', '$asis', '$observacion')";
    }else {
      $query_act="UPDATE control_conf_cad SET  n_oficio ='$oficio' , progra_eva = '$fecha', result_eva = '$resultado', n_oce ='$oficio_ce', fecha_emision_result= '$fecha_resultado', asis_c3 = '$asis', observacion ='$observacion' WHERE id_cadete = '$id'";
    }

    $conn->query($query_act);
    //echo $query_act;
    $conn->close();

    header('location: solconfi.php');
  }

  public function obtenerPersonal($dat1)
  {
    include '../../requires/conexion.php';
    //$query_n="SELECT idCadete, curp ,nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento FROM cadete WHERE nombre LIKE '%$dat1%' ";
    $piezas = explode(" ", $dat1);
    if(sizeof($piezas) == 1){
      $nombre = $piezas[0];
      $query_n = "SELECT idCadete, curp ,nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento FROM cadete WHERE nombre like '%$nombre%' or a_paterno like '%$nombre%' ";
    }else if(sizeof($piezas) == 2){
      $nombre = $piezas[0];
      $paterno = $piezas [1];
      $query_n = "SELECT idCadete, curp ,nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%') "; //nombre like '%$nombre2%'
    }else if(sizeof($piezas) == 3){
      $nombre = $piezas[0];
      $paterno = $piezas[1];
      $materno = $piezas[2];
      $query_n = "SELECT idCadete, curp ,nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%' and a_materno like '%$materno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%' AND  nombre like '%$materno%')";
    }
    $cad = $conn->query($query_n);
    $datos=mysqli_fetch_row($cad);

    if (!empty($datos)) {
      echo '
      <tr>
        <td>'.$datos[1].'</td>
        <td>'.$datos[2].'</td>
        <td>'.$datos[3].'</td>
        <td>'.$datos[4].'</td>
        <td>'.$datos[5].'</td>
        <td>'.$datos[6].'</td>
        <td>'.$datos[7].'</td>
        <td hidden>
          <input type="text" name="id_cad" value="'.$datos[0].'" readonly>
        </td>
      </tr>
      ';
    }
  }

  public function excelControlconf()
  {
    $i=1;
    include '../../requires/conexion.php';

    $query= "SELECT folio, curp, nombre, a_paterno, a_materno, tipo_ingreso, genero, f_nacimiento, n_oficio, progra_eva, result_eva, n_oce, fecha_emision_result, asis_c3, observacion  FROM control_conf_cad as ccc INNER JOIN cadete as cad ON cad.idCadete = ccc.id_cadete";
    $respuesta=$conn->query($query);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();
    // Set document properties
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    //$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                   ->setTitle("C3");

    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Folio de registro')
                ->setCellValue('B1', 'CURP')
                ->setCellValue('C1', 'Nombre')
                ->setCellValue('D1', 'Apellido paterno')
                ->setCellValue('E1', 'Apellido materno')
                ->setCellValue('F1', 'Tipo de convocatoria')
                ->setCellValue('G1', 'Género')
                ->setCellValue('H1', 'Fecha de nacimiento')
                ->setCellValue('I1', 'Resultado')
                ->setCellValue('J1', 'No. de oficio')
                ->setCellValue('K1', 'Fecha de programación de evaluación')
                ->setCellValue('L1', 'No. oficio del centro de Evaluacion')
                ->setCellValue('M1', 'Fecha emisión de hoja de resultado')
                ->setCellValue('N1', 'Asistio primer día a C3')
                ->setCellValue('O1', 'Observaciones');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1])
                      ->setCellValue('C'.$i, $aptos[2])
                      ->setCellValue('D'.$i, $aptos[3])
                      ->setCellValue('E'.$i, $aptos[4])
                      ->setCellValue('F'.$i, $aptos[5])
                      ->setCellValue('G'.$i, $aptos[6])
                      ->setCellValue('H'.$i, $aptos[7])
                      ->setCellValue('I'.$i, $aptos[10])
                      ->setCellValue('J'.$i, $aptos[8])
                      ->setCellValue('K'.$i, $aptos[9])
                      ->setCellValue('L'.$i, $aptos[11])
                      ->setCellValue('M'.$i, $aptos[12])
                      ->setCellValue('N'.$i, $aptos[13])
                      ->setCellValue('O'.$i, $aptos[14]);


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(45);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(45);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(45);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(45);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(45);

    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Lista_control_de_confianza.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }

}


$control = new ControlConf();

if (isset($_POST["nombre"])&&isset($_POST["fecha"])) {
  $control->actualizarControl($_POST['id_cad'] ,$_POST['oficio'], $_POST["fecha"],$_POST['resultado'], $_POST['oficio_ce'],$_POST['fecha_resultado'], $_POST['asistio_c3'], $_POST['observacion']);
  //echo "ok";

}

if (isset($_GET["obtener"])) {
  //echo "string";
  $cont = $control->obtenerConfianza();
  echo $cont;
}

if (isset($_POST["nombre"])) {

  $control->obtenerPersonal($_POST["nombre"]);
}
 ?>
