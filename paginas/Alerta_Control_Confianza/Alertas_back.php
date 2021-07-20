<?php
/**
 *
 */
class Alertas
{
  public function obtenerAlertas()
  {
    include '../../requires/conexion.php';
    $fecha_actual = date("Y-m-d");
    $query_conf="SELECT * FROM control_conf";
    //$conn->query("SET CHARACTER SET 'utf8'");
    $resultado_conf=$conn->query($query_conf);
    $rango = date("Y-m-d",strtotime($fecha_actual."+ 1 month"));
    while ($datos=mysqli_fetch_row($resultado_conf)) {

      if($datos[2] <= $rango){
        if ($datos[2] < $fecha_actual) {
          $mensaje="ha expirado";
        }else {
          $mensaje="la vigencia está por expirar";
        }
        //echo date("d-m-Y",strtotime($fecha_actual."+ 1 month"));
        echo
              "<tr>
                 <td>$datos[0]</td>
                 <td>$datos[1]</td>
                 <td>$datos[2]</td>
                 <td style='border: 2px solid #ff0000';>$mensaje</td>
               </tr>"
              ;
      }
    }
    $conn->close();
  }
  public function rangoAlertas($rango)
  {
    include '../../requires/conexion.php';
    $fecha_actual = date("Y-m-d");
    $query_conf="SELECT * FROM control_conf";
    //$conn->query("SET CHARACTER SET 'utf8'");
    //$cot = $rango + 1;
    $resultado_conf=$conn->query($query_conf);
    $fecha = date("Y-m-d",strtotime($fecha_actual."+ ".$rango." month"));
    //$cota_mayor = date("Y-m-d",strtotime($fecha_actual."+ ".$cot." month"));
    while ($datos=mysqli_fetch_row($resultado_conf)) {

      if($datos[2] < $fecha){
        if ($datos[2] < $fecha_actual) {
          $mensaje="ha expirado";
        }else {
          $mensaje="vigente, tener precaución";
        }

        //echo date("d-m-Y",strtotime($fecha_actual."+ 1 month"));
        echo
              "<tr>
                 <td>$datos[0]</td>
                 <td>$datos[1]</td>
                 <td>$datos[2]</td>
                 <td style='border: 2px solid #ff0000';>$mensaje</td>
               </tr>"
              ;
      }
    }
        $conn->close();
  }
}

$alerta = new Alertas();
if (isset($_GET["obtener"])) {
  //echo "string";
  $alerta->obtenerAlertas();
}
if (isset($_POST["rango"])) {
  $alerta->rangoAlertas($_POST["rango"]);
}

 ?>
