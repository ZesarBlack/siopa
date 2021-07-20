<?php
/**
 *
 */
class Capacitacion
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
  $query_registros="SELECT * FROM capacitacion_policia LIMIT 10";
  $respuesta_registros= $conn->query($query_registros);
  while($registros = mysqli_fetch_row($respuesta_registros)) {
    $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$registros[1], true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);

     echo '
     <tr>
       <td>'.$policia[0]->nombre.'</td>
       <td>'.$policia[0]->cuip.'</td>
       <td>'.$policia[0]->no_control.'</td>
       <td>'.$registros[2].'</td>
       <td>'.$registros[3].'</td>
       <td>'.date("d-m-Y", strtotime($registros[4])).' - '.date("d-m-Y", strtotime($registros[5])).'</td>
       <td>'.$registros[6].'</td>
       <td>'.$registros[7].'</td>
       <td>'.$registros[8].'</td>
     </tr>
     ';
  }
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
        <th>Número de control</th>
        <th>CUIP</th>
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

  public function agregarRegistrocap($control,  $nombre_curso,  $horas,  $p_inicio,  $p_fin,  $instancia,  $n_documento, $documento)
  {
    require '../../requires/conexion.php';
    $query_registrocap="INSERT INTO capacitacion_policia (id_elemento,  nombre_curso, horas,  periodo_inicio,  periodo_fin,  instancia_cap, documento_gen, documento_path) VALUES
    ('$control', '$nombre_curso', '$horas', '$p_inicio', '$p_fin', '$instancia', '$n_documento', '$documento')";
    //echo $query_registrocap;
    $conn->query($query_registrocap);
    $conn->close();
    header("Location:cargando.php");
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
      $query_registro="SELECT * FROM capacitacion_policia WHERE id_elemento ='$control' LIMIT 10";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM capacitacion_policia";
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
           <td>'.date("d-m-Y", strtotime($registro[4])).' - '.date("d-m-Y", strtotime($registro[5])).'</td>
           <td>'.$registro[6].'</td>
           <td>'.$registro[7].'</td>
           <td>'.$registro[8].'</td>
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
      $query_registro="SELECT * FROM capacitacion_policia WHERE id_elemento ='$control'";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM capacitacion_policia";
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
    // Set document properties
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    //$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                   ->setTitle("C3");

    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'NOMBRE COMPLETO')
                ->setCellValue('B1', 'CUIP')
                ->setCellValue('C1', 'NÚMERO DE CONTROL')
                ->setCellValue('D1', 'NOMBRE DEL CURSO')
                ->setCellValue('E1', 'HORAS DE CAPACITACIÓN')
                ->setCellValue('F1', 'PERIODO DE CAPACITACÓN')
                ->setCellValue('G1', 'INSTANCIA CAPACITADORA')
                ->setCellValue('H1', 'DOCUMENTO GENERADO');

    //-------------------------------------/1
    if (empty($respuesta_registro)) {
      $objPHPExcel->setActiveSheetIndex(0)
      ->setCellValue('A'.$i, "")
      ->setCellValue('B'.$i, "")
      ->setCellValue('C'.$i, "")
      ->setCellValue('D'.$i, "")
      ->setCellValue('E'.$i, "")
      ->setCellValue('F'.$i, "")
      ->setCellValue('G'.$i, "")
      ->setCellValue('H'.$i, "");
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
                    ->setCellValue('F'.$i, date("d-m-Y", strtotime($registro[4])).' - '.date("d-m-Y", strtotime($registro[5])))
                    ->setCellValue('G'.$i, $registro[6])
                    ->setCellValue('H'.$i, $registro[7]);
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
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);

    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "capacitacion.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }


}

$capacitacion = new Capacitacion();

if (isset($_POST['control']) && empty($_POST['nombre_curso'])) {
  $capacitacion->obtenerElemento($_POST['control']);
}

if (isset($_POST['control']) && isset($_POST['nombre_curso']) && isset($_POST['horas']) && isset($_POST['p_inicio']) && isset($_POST['p_fin']) && isset($_POST['instancia']) && isset($_POST['n_documento'])) {
  if (!isset($_FILES['documento'])) {
     $_FILES['documento']['name']="sin documento";
  }
  $capacitacion->agregarRegistrocap($_POST['control'], $_POST['nombre_curso'], $_POST['horas'], $_POST['p_inicio'], $_POST['p_fin'], $_POST['instancia'], $_POST['n_documento'],$_FILES['documento']['name'] );
  echo $_FILES['documento']['name'];
}

if (isset($_POST['n_busqueda'])) {
  $capacitacion->buscarRegistro($_POST['n_busqueda']);
  $capacitacion->excelCapacitacion($_POST['n_busqueda']);
}
 ?>
