<?php
/**
 *
 */
class Desempeno
{
  public function obtenerRegistros()
  {
    $arrContextOptions=array(
      "ssl"=>array(
          'method'=>"GET",
          "verify_peer"=>false,
          "verify_peer_name"=>false,
      ),
    );
    require '../../requires/conexion.php';
    $query_registros="SELECT * FROM evalucaion_desempeno";
    $resultado_registros = $conn->query($query_registros);
    while ($registros = mysqli_fetch_row($resultado_registros)) {
      $respuesta = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$registros[1], true, stream_context_create($arrContextOptions));
      $policia = json_decode($respuesta);
      echo '
      <tr>
        <td>'.$policia[0]->nombre.'</td>
        <td>'.$policia[0]->cuip.'</td>
        <td>'.$policia[0]->no_control.'</td>
        <td>'.$registros[2].'</td>
        <td>'.$registros[3].'</td>
        <td>'.$registros[4].'</td>
        <td>'.$registros[5].'</td>
      </tr>
      ';
    }
    $conn->close();
  }

  public function obtenerElemento($control)
  {
    $arrContextOptions=array(
      "ssl"=>array(
          'method'=>"GET",
          "verify_peer"=>false,
          "verify_peer_name"=>false,
      ),
    );
    $respuesta = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$control, true, stream_context_create($arrContextOptions));
    $policia = json_decode($respuesta);

    if ($policia != 0) {
      echo "
      <h1>Elemento</h1>
      <thead>
        <th>Nombre</th>
        <th>CUIP</th>
        <th>Número de control</th>
      </thead>
      ";
      echo '
      <tr>
        <td>'.$policia[0]->nombre.'</td>
        <td>'.$policia[0]->cuip.'</td>
        <td>'.$policia[0]->no_control.'</td>
      </tr>
      ';
    }else {
      echo "No hay resultados";
    }
  }

  public function registrarDesempeno($control, $perfil, $fecha, $instancia, $resultado)
  {
    require '../../requires/conexion.php';
    $query_agregar_desemp="INSERT INTO evalucaion_desempeno (n_control, perfil, fecha_eva, instancia_eva, result_eva) VALUES ('$control', '$perfil', '$fecha', '$instancia', '$resultado')";
    echo $query_agregar_desemp;
    $conn->query($query_agregar_desemp);
    $conn->close();
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
      $query_registro="SELECT * FROM evalucaion_desempeno WHERE n_control ='$control'";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM evalucaion_desempeno";
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
           <td>'.$policia[0]->no_control.'</td>
           <td>'.$registro[2].'</td>
           <td>'.$registro[3].'</td>
           <td>'.$registro[4].'</td>
           <td>'.$registro[5].'</td>
         </tr>
         ';
      }
    }
    $conn->close();
  }

  public function excelDesempeno($control)
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
      $query_registro="SELECT * FROM evalucaion_desempeno WHERE n_control ='$control'";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM evalucaion_desempeno";
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
                ->setCellValue('C1', 'NÚMERO DE CONTROL')
                ->setCellValue('D1', 'PERFIL')
                ->setCellValue('E1', 'FECHA DE EVALUACIÓN')
                ->setCellValue('F1', 'INSTANCIA CAPACITADORA')
                ->setCellValue('G1', 'RESULTADO');

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
                    ->setCellValue('C'.$i, $policia[0]->no_control)
                    ->setCellValue('D'.$i, $registro[2])
                    ->setCellValue('E'.$i, $registro[3])
                    ->setCellValue('F'.$i, $registro[4])
                    ->setCellValue('G'.$i, $registro[5]);
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
    $objWriter->save(str_replace('.php', '.xlsx', "evaluacion_desempeno.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }
}

$desempeno = new Desempeno();

if (isset($_POST['control'])) {
  $desempeno->obtenerElemento($_POST['control']);
  //echo "okokokokokokok";  // code...
}

if (isset($_POST['n_busqueda'])) {
    $desempeno->buscarRegistro($_POST['n_busqueda']);
    $desempeno->excelDesempeno($_POST['n_busqueda']);
}

if (isset($_POST['control']) && isset($_POST['perfil']) && isset($_POST['fecha']) && isset($_POST['instancia']) && isset($_POST['resultado'])) {
  /*
  if ($_POST['fecha']== "0000-00-00") {
    $_POST['fecha']== "2000-01-01";
  }
  */
  //echo $_POST['fecha'];
  $desempeno->registrarDesempeno($_POST['control'], $_POST['perfil'], $_POST['fecha'], $_POST['instancia'], $_POST['resultado']);
  //echo $_POST['control'];
}
 ?>
