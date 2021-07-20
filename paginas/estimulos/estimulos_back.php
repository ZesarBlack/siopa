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
  $query_registros="SELECT * FROM estimulos LIMIT 10";
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
       <td>'.$registros[4].'</td>
       <td>'.$registros[5].'</td>
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

  public function agregarRegistrocap($id, $motivo, $estimulo, $num_sesion, $fecha_rec)
  {
    require '../../requires/conexion.php';
    $query_registrocap="INSERT INTO estimulos (cuip,  motivo, estimulo_ot, num_sesion_comision, fecha) VALUES
    ('$id', '$motivo', '$estimulo', '$num_sesion', '$fecha_rec')";
    echo $query_registrocap;
    $conn->query($query_registrocap);
    $conn->close();
    //header("Location:cargando.php");
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
      $query_registro="SELECT * FROM estimulos WHERE cuip ='$control'";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM estimulos LIMIT 10";
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
      $query_registro="SELECT * FROM estimulos WHERE cuip ='$control'";
    }elseif ($control == "") {
      $query_registro="SELECT * FROM estimulos";
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
                ->setCellValue('D1', 'MOTIVO')
                ->setCellValue('E1', 'ESTIMULOS')
                ->setCellValue('F1', 'NÚMERO DE SESIÓN DE LA COMISIÓN EN QUE SE APRUEBA')
                ->setCellValue('G1', 'FECHA DE RECEPCIÓN DEL ESTIMULO');

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
    $objWriter->save(str_replace('.php', '.xlsx', "estimulos.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }
}

$capacitacion = new Capacitacion();

if (isset($_POST['control']) && empty($_POST['nombre_curso'])) {
  $capacitacion->obtenerElemento($_POST['control']);
}




if (isset($_POST["id"]) && isset($_POST["motivo"]) && isset($_POST["estimulo"]) && isset($_POST["num_sesion"]) && isset($_POST["fecha_rec"])) {
  $capacitacion->agregarRegistrocap($_POST["id"],  $_POST["motivo"],  $_POST["estimulo"],  $_POST["num_sesion"],  $_POST["fecha_rec"]);
  //echo $_POST["id"]."---";
  //echo $_POST["motivo"]."---";
  //echo $_POST["estimulo"]."---";
  //echo $_POST["num_sesion"]."---";
  //echo $_POST["fecha_rec"];
}

if (isset($_POST['n_busqueda'])) {
  $capacitacion->buscarRegistro($_POST['n_busqueda']);
  $capacitacion->excelCapacitacion($_POST['n_busqueda']);
}

 ?>
