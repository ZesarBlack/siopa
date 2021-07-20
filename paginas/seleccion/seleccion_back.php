<?php
/**
 *
 */
class Seleccion
{
  public function obtenerSeleccionados()
  {
    require '../../requires/conexion.php';
    $queryos="SELECT c.nombre, c.a_paterno, c.a_materno , folio,  cu.nombre, cu.generacion, cu.grupo, cu.periodo, calificacion FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cu.nombre LIKE '%Formacion%' AND calificacion > 7 ";
    $resultado = $conn->query($queryos);
    while ($seleccionados = mysqli_fetch_row($resultado)) {
      echo '
      <tr>
        <td>'.$seleccionados[0].'</td>
        <td>'.$seleccionados[1].'</td>
        <td>'.$seleccionados[2].'</td>
        <td>'.$seleccionados[3].'</td>
        <td>'.$seleccionados[4].'</td>
        <td>'.$seleccionados[5].'</td>
        <td>'.$seleccionados[6].'</td>
        <td>'.$seleccionados[7].'</td>
        <td>'.$seleccionados[8].'</td>
      </tr>
      ';
    }
  }

  public function axcelAspirantes()
  {
    $i=1;
    include '../../requires/conexion.php';
    $query="SELECT c.nombre, c.a_paterno, c.a_materno , folio,  cu.nombre, cu.generacion, cu.grupo, cu.periodo, calificacion FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cu.nombre LIKE '%Formacion%' AND calificacion > 7 ";

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
                ->setCellValue('B1', 'Nombre completo')
                ->setCellValue('C1', 'Nombre del curso')
                ->setCellValue('D1', 'Generación')
                ->setCellValue('E1', 'Grupo')
                ->setCellValue('F1', 'Periodo')
                ->setCellValue('G1', 'Calificación final');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[3])
                      ->setCellValue('B'.$i, $aptos[0]." ".$aptos[1]." ".$aptos[2])
                      ->setCellValue('C'.$i, $aptos[4])
                      ->setCellValue('D'.$i, $aptos[5])
                      ->setCellValue('E'.$i, $aptos[6])
                      ->setCellValue('F'.$i, $aptos[7])
                      ->setCellValue('G'.$i, $aptos[8]);


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Reporte_aprobados.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }

}

$seleccion = new Seleccion();

 ?>
