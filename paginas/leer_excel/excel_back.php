<?php
/**
 *
 */
class Excel
{
  public function leerExcel($ruta)
  {
      $conn = new mysqli("192.168.100.14", "root", "Xit.060", "siseg_v3");
      $fila=1;
      if (($gestor = fopen($ruta,"r")) !== FALSE) {

          while (($datos = fgetcsv($gestor, 6000, ",")) !== FALSE) {
            if ($fila !=1 && $datos[0] !="") {

              $id = explode(">", $datos[0]);
              $id_f = explode("<", $id[1]);
              $folio=intval($id_f[0]);
              $hoy = date("d-m-Y");
              $reemplazos = array(";","," , "'" , "/" , ".");
              //echo $folio;
              //echo $hoy;
              $fecha = utf8_encode($datos[1]);
              $ubicacion = str_replace($reemplazos, " ",$datos[2]);
              $colonia = str_replace($reemplazos, " ",$datos[3]);
              $hora = utf8_encode($datos[4]);
              $tipo = utf8_encode($datos[5]);

              if ($datos[6] != "N/A") {
                $coordenada = explode(",", $datos[6]);
                $coorx = $coordenada[0];
                $coory = $coordenada[1];
              }else {
                $coordenada = explode(",", $datos[6]);
                $coorx = "'N/A'";
                $coory = "'N/A'";
              }
                $comentario = str_replace($reemplazos, " ",$datos[7]);
                $query_subir="INSERT INTO no_confirmados (folio, fecha, ubicacion, colonia, hora, tipo, coordenda_x, coordenada_y ,comentarios ,noco_usuario ,noco_fecha_subida ,noco_estatus)
                VALUES ('$folio', '$fecha', '$ubicacion', '$colonia', '$hora', '$tipo', $coorx, $coory , '$comentario', 1, '$hoy', 1);";
                echo $query_subir;
                $conn->query($query_subir);
                echo "<br>";
            }
              $fila++;
          }
          $conn->close();

          fclose($gestor);
      }
  }
}
 $excel =  new Excel();
 if (isset($_FILES['documento'])) {
   //echo $_FILES['documento']['tmp_name'];
   $excel->leerExcel($_FILES['documento']['tmp_name']);
 }
 //$excel->leerExcel();
 ?>
