<?php
/**
 *
 */

class ControlConf
{

  public function obtenerConfianza()
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    include '../../requires/conexion.php';
    $query_conf="SELECT * FROM control_confianza_elementos_p LIMIT 10";
    //$conn->query("SET CHARACTER SET 'utf8'");
    $resultado_conf=$conn->query($query_conf);
    if (empty($resultado_conf)) {
        echo "No hay resultados";
    }elseif (!empty($resultado_conf)) {
      while ($datos=mysqli_fetch_row($resultado_conf)) {
        $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$datos[1], true, stream_context_create($arrContextOptions));
        $policia = json_decode($response);
        echo
              '<tr>
                 <td>'.$policia[0]->nombre.'</td>
                 <td>'.$policia[0]->cuip.'</td>
                 <td>'.$datos[2].'</td>
                 <td>'.$datos[3].'</td>
                 <td>'.$datos[4].'</td>
                 <td>'.$datos[5].'</td>
                 <td>'.$datos[6].'</td>
               </tr>
              ';
      }
    }
    $conn->close();
  }

  public function actualizarContro($control, $cuip, $nombre, $oficio, $fecha, $resultado, $oficio_ce, $fecha_resultado)
  {
    include '../../requires/conexion.php';

    $query_r="SELECT n_control FROM control_confianza_elementos_p WHERE n_control ='$control'";
    $res = $conn->query($query_r);

    if (empty($d=mysqli_fetch_row($res))) {
      // code...
      $query_act="INSERT INTO control_confianza_elementos_p(n_control, n_oficio, fecha_progra_eva, result_eva, n_oficio_c, fecha_emision_result) values ('$control', '$oficio', '$fecha', '$resultado', '$oficio_ce', '$fecha_resultado')";
    }else {
      $query_act="UPDATE control_confianza_elementos_p SET n_oficio ='$oficio' , fecha_progra_eva = '$fecha', result_eva = '$resultado', n_oficio_c ='$oficio_ce', fecha_emision_result= '$fecha_resultado'";
    }
/*
n_control, n_oficio, fecha_progra_eva, result_eva, n_oficio_c, fecha_emision_result
*/
    $conn->query($query_act);
    echo $query_act;
    $conn->close();
    header('location: solconfi.php');
  }

  public function obtenerElemento($no_control)
    {
      $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
      );
      $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$no_control, true, stream_context_create($arrContextOptions));
      $policia = json_decode($response);
      //echo $policia;
      if (!empty($policia)) {
        echo "
        <h1>Elemento</h1>
        <thead>
          <th>Nombre</th>
          <th>CUIP</th>
          <th>Número de control</th>
          <th>Puesto</th>
        </thead>
        ";
        echo
              '<tr>
                <td>'.$policia[0]->nombre.'</td>
                <td>'.$policia[0]->cuip.'</td>
                <td>'.$policia[0]->no_control.'</td>
                <td>'.$policia[0]->PuestoRNPSP.'</td>
              </tr>';
      }elseif (empty($policia)) {
        echo "No hay resultado";
      }
    }

    public function buscarRegistro($control)
    {
      $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
      );
      require '../../requires/conexion.php';
      if ($control != "") {
        $query_registro="SELECT * FROM control_confianza_elementos_p WHERE n_control ='$control' LIMIT 10";
      }elseif ($control == "") {
        $query_registro="SELECT * FROM control_confianza_elementos_p";
      }

      $respuesta_registro = $conn->query($query_registro);
      if (empty($respuesta_registro)) {
        echo "No hay registro del elemento";
      }elseif (!empty($respuesta_registro)) {
        while ($registro=mysqli_fetch_row($respuesta_registro)) {
          $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$registro[1], true, stream_context_create($arrContextOptions));
          $policia = json_decode($response);

           echo '
           <tr>
             <td>'.$policia[0]->nombre.'</td>
             <td>'.$policia[0]->cuip.'</td>
             <td>'.$registro[2].'</td>
             <td>'.$registro[3].'</td>
             <td>'.$registro[4].'</td>
             <td>'.$registro[5].'</td>
             <td>'.$registro[6].'</td>
           </tr>
           ';
        }
      }
      $conn->close();
    }

    public function excelCapacitacion($control)
    {
      $i=1;
      include '../../requires/conexion.php';
      $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
      );
      require '../../requires/conexion.php';
      if ($control != "") {
        $query_registro="SELECT * FROM control_confianza_elementos_p WHERE n_control ='$control'";
      }elseif ($control == "") {
        $query_registro="SELECT * FROM control_confianza_elementos_p";
      }
      $respuesta_registro = $conn->query($query_registro);

      //-------------------------------------1
      error_reporting(E_ALL);
      ini_set('display_errors', TRUE);
      ini_set('display_startup_errors', TRUE);
      define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
      /** Include PHPExcel */
      require '../../librerias/PHPExcel/Classes/PHPExcel.php';
      $objPHPExcel = new PHPExcel();
      $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                     ->setTitle("C3");


      $objPHPExcel->setActiveSheetIndex(0)
                  ->setCellValue('A1', 'NOMBRE COMPLETO')
                  ->setCellValue('B1', 'CUIP')
                  ->setCellValue('C1', 'NÚMERO DE OFICIO DE COMISIÓN')
                  ->setCellValue('D1', 'FECHA DE PROGRAMACIÓN DE LA EVALUACIÓN')
                  ->setCellValue('E1', 'RESULTADO DE LA EVALUACIÓN')
                  ->setCellValue('F1', 'NÚMERO DE OFICIO DEL CENTRO DE EVALUACION')
                  ->setCellValue('G1', 'FECHA DE EMISIÓN DE HOJA DE RESULTADO');

      //-------------------------------------/1
      if (empty($respuesta_registro)) {
        $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A'.$i, "")
        ->setCellValue('B'.$i, "")
        ->setCellValue('C'.$i, "")
        ->setCellValue('D'.$i, "")
        ->setCellValue('E'.$i, "")
        ->setCellValue('F'.$i, "")
        ->setCellValue('G'.$i, "");
      }elseif (!empty($respuesta_registro)) {
        while ($registro=mysqli_fetch_row($respuesta_registro)) {
          $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$registro[1], true, stream_context_create($arrContextOptions));
          $policia = json_decode($response);

          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $policia[0]->nombre)
                      ->setCellValue('B'.$i, $policia[0]->cuip)
                      ->setCellValue('C'.$i, $registro[2])
                      ->setCellValue('D'.$i, $registro[3])
                      ->setCellValue('E'.$i, $registro[4])
                      ->setCellValue('F'.$i, $registro[5])
                      ->setCellValue('G'.$i, $registro[6]);
        }
      }

      $conn->close();
      $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
      $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);

      $callStartTime = microtime(true);

      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save(str_replace('.php', '.xlsx', "control_confianza.xlsx"));
      $callEndTime = microtime(true);
      $callTime = $callEndTime - $callStartTime;
    }

}

$control = new ControlConf();

if (isset($_POST["curp"])&&isset($_POST["fecha"])) {
  //echo "ok";
  //$_POST['fecha'];
  //cuip $_POST['cuip'];
  //nombre $_POST['nombre'];
  //oficio $_POST['oficio'];
  //resultado $_POST['resultado'];
  //fecha_resultado $_POST['oficio_ce'];
  $control->actualizarContro($_POST["curp"], $_POST['cuip'], $_POST['nombre'], $_POST['oficio'], $_POST["fecha"],$_POST['resultado'], $_POST['oficio_ce'],$_POST['fecha_resultado']);
}

if (isset($_GET["obtener"])) {
  //echo "string";
  $control->obtenerConfianza();
}

if (isset($_POST["curp"])) {
  //echo "string";
  $control->obtenerElemento($_POST["curp"]);
}

if (isset($_POST["n_busqueda"])) {
  //echo "string";
  $control->buscarRegistro($_POST["n_busqueda"]);
  $control->excelCapacitacion($_POST["n_busqueda"]);
}

 ?>
