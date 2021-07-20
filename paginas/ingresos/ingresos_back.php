<?php
/**
 *
 */
class Ingresos
{

  public function obtenerIngresos()
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    $response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar", true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);
    $fecha_actual = date("Y-m-d");
    $num_policias= count($policia);
    for ($i=0; $i < $num_policias ; $i++) {

      $datetime1 = new DateTime($policia[$i]->nacimiento);
      $datetime2 = new DateTime($fecha_actual);
      $interval = $datetime1->diff($datetime2);
      $años = $interval->format('%y');
      //echo $dias;

      echo '
      <tr>
        <td></td>
        <td>'.$policia[$i]->no_control.'</td>
        <td>'.$policia[$i]->nombre.'</td>
        <td>'.$policia[$i]->nacimiento.'</td>
        <td>'.$años.'</td>
        <td>'.$policia[$i]->sexo.'</td>
        <td>'.$policia[$i]->rfc.'</td>
        <td>'.$policia[$i]->calle.', '.$policia[$i]->nExterior.', '.$policia[$i]->nInterior.', '.$policia[$i]->colonia.'</td>
        <td>'.$policia[$i]->estado_civil.'</td>
        <td></td>
        <td></td>
        <td>'.$policia[$i]->curp.'</td>
        <td>'.$policia[$i]->No_sm.'</td>
        <td>'.$policia[$i]->movil.'</td>
        <td>'.$policia[$i]->email.'</td>
        <td>'.$policia[$i]->adscripcion.'</td>
        <td>'.$policia[$i]->funcion.'</td>
        <td></td>
        <td></td>
        <td>'.$policia[$i]->licencia.'</td>
        <td>'.$policia[$i]->cuip.'</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>'.$policia[$i]->no_cartilla.'</td>
        <td></td>

        <td>'.$policia[$i]->PuestoRNPSP.'</td>
      ';
    }

  }

  public function obtenerXtipo($tipo, $busqueda)
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&".$tipo."=".$busqueda, true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);

    if (!empty($policia)) {
      echo '
      <tr>
        <td></td>
        <td>'.$policia[0]->no_control.'</td>
        <td>'.$policia[0]->nombre.'</td>
        <td>'.$policia[0]->nacimiento.'</td>
        <td></td>
        <td>'.$policia[0]->sexo.'</td>
        <td>'.$policia[0]->rfc.'</td>
        <td>'.$policia[0]->calle.', '.$policia[0]->nExterior.', '.$policia[0]->nInterior.', '.$policia[0]->colonia.'</td>
        <td>'.$policia[0]->estado_civil.'</td>
        <td></td>
        <td></td>
        <td>'.$policia[0]->curp.'</td>
        <td>'.$policia[0]->No_sm.'</td>
        <td>'.$policia[0]->movil.'</td>
        <td>'.$policia[0]->email.'</td>
        <td>'.$policia[0]->adscripcion.'</td>
        <td>'.$policia[0]->funcion.'</td>
        <td></td>
        <td></td>
        <td>'.$policia[0]->licencia.'</td>
        <td>'.$policia[0]->cuip.'</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>'.$policia[0]->no_cartilla.'</td>
        <td></td>

        <td>'.$policia[0]->PuestoRNPSP.'</td>
      ';
    }else {
      echo "No hay información";
    }
  }

  public function numeroPolicias()
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cantidad=1", true, stream_context_create($arrContextOptions));
    echo $response;
  }

  public function obtenerPolicia($numero_control)
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $response = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&control=".$numero_control, true, stream_context_create($arrContextOptions));
    if ($response=="0" || $response=="") {
      echo "No hay resultados";
    }else{
      //echo $response;
      $policia = json_decode($response);
      echo '
      <tr>
        <td></td>
        <td>'.$policia[0]->no_control.'</td>
        <td>'.$policia[0]->nombre.'</td>
        <td>'.$policia[0]->nacimiento.'</td>
        <td></td>
        <td>'.$policia[0]->sexo.'</td>
        <td>'.$policia[0]->rfc.'</td>
        <td>'.$policia[0]->calle.', '.$policia[0]->nExterior.', '.$policia[0]->nInterior.', '.$policia[0]->colonia.'</td>
        <td>'.$policia[0]->estado_civil.'</td>
        <td></td>
        <td></td>
        <td>'.$policia[0]->curp.'</td>
        <td>'.$policia[0]->No_sm.'</td>
        <td>'.$policia[0]->movil.'</td>
        <td>'.$policia[0]->email.'</td>
        <td>'.$policia[0]->adscripcion.'</td>
        <td>'.$policia[0]->funcion.'</td>
        <td></td>
        <td>'.$policia[0]->licencia.'</td>
        <td>'.$policia[0]->cuip.'</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>'.$policia[0]->no_cartilla.'</td>
        <td></td>

        <td>'.$policia[0]->PuestoRNPSP.'</td>
      ';
      // code...
    }
  }
}

$ingreso = new Ingresos();


if (isset($_POST['nombre']) && $_POST['tipo']=="")  {
  $ingreso->obtenerPolicia($_POST['nombre']);
}
if (isset($_POST['nombre']) && isset($_POST['tipo'])) {
  $ingreso->obtenerXtipo($_POST['tipo'],$_POST['nombre']);
}
if (isset($_POST['inicio']) && $_POST['inicio']==1) {
  $ingreso->obtenerIngresos();
}

 ?>
