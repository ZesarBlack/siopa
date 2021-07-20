<?php
/**
 *
*/
class Certificado
{
  public function agregarRegistro($cuip,
$numero_conv,
$folio_prom,
$fecha_ingreso,
$categoria_actual,
$antiguedad_cate,
$categoria_asp,
$documentacion,
$estatus_unidad,
$estatus_comision,
$estatus_consejo,
$estatus_contraloria,
$fecha_a_examen,
$resultado_examen,
$n_ofisio_comision,
$fecha_progra_eva,
$resultado_eva,
$numero_oficio_centro,
$fecha_emision_hoja_res,
$numero_sesion_comision,
$fecha_emision_constancia)
  {
    require '../../requires/conexion.php';
    $query_ingresar="INSERT INTO promocion_grado (
      cuip ,numero_conv ,folio_prom ,fecha_ingreso ,categoria_actual ,
      antiguedad_cate ,categoria_asp ,documentacion ,estatus_unidad ,estatus_comision ,estatus_consejo ,
      estatus_contraloria ,fecha_a_examen ,resultado_examen ,n_ofisio_comision,fecha_progra_eva ,
      resultado_eva ,numero_oficio_centro ,fecha_emision_hoja_res ,numero_sesion_comision ,
      fecha_emision_constancia
    )
    VALUES (
      '$cuip','$numero_conv','$folio_prom','$fecha_ingreso','$categoria_actual',
      '$antiguedad_cate','$categoria_asp','$documentacion','$estatus_unidad',
      '$estatus_comision','$estatus_consejo','$estatus_contraloria','$fecha_a_examen','$resultado_examen',
      '$n_ofisio_comision','$fecha_progra_eva','$resultado_eva','$numero_oficio_centro',
      '$fecha_emision_hoja_res','$numero_sesion_comision','$fecha_emision_constancia'
    )";
    echo $query_ingresar;
    $conn->query($query_ingresar);
    $conn->close();
    header("Location:promocion_grado.php");
  }

  public function obtenerElemento($control)
  {
    require '../../requires/conexion.php';
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $respuesta = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$control, true, stream_context_create($arrContextOptions));
    $policia=json_decode($respuesta);
    if (!empty($policia)) {
      $cuip = $policia[0]->cuip;
      $query_promo ="SELECT * FROM promocion_grado WHERE cuip = '$cuip'";
      $respuesta_promo = $conn->query($query_promo);
      if (is_null($promo = mysqli_fetch_array($respuesta_promo))) {
        $promo[2]="";
        $promo[3]="";
        $promo[4]="";
        $promo[5]="";
        $promo[6]="";
        $promo[7]="";
        $promo[8]="";
        $promo[9]="";
        $promo[10]="";
        $promo[11]="";
        $promo[12]="";
        $promo[13]="";
        $promo[14]="";
        $promo[15]="";
        $promo[16]="";
        $promo[17]="";
        $promo[18]="";
        $promo[19]="";
        $promo[20]="";
        $promo[21]="";
        //$folio_prom1="";
        //$fecha_ingreso1="";
        //$categoria_actual1="";
        //$antiguedad_cate1="";
        //$categoria_asp1="";
      }
      echo
            '<tr>
                <td>'.$policia[0]->nombre.'</td>
                <td>'.$policia[0]->cuip.'</td>
                <td>'.$policia[0]->no_control.'</td>
                <td>'.$promo[2].'</td>
                <td>'.$promo[3].'</td>
                <td>'.$promo[4].'</td>
                <td>'.$promo[5].'</td>
                <td>'.$promo[6].'</td>
                <td>'.$promo[7].'</td>
                <td>'.$promo[8].'</td>
                <td>'.$promo[9].'</td>
                <td>'.$promo[10].'</td>
                <td>'.$promo[11].'</td>
                <td>'.$promo[12].'</td>
                <td>'.$promo[13].'</td>
                <td>'.$promo[14].'</td>
                <td>'.$promo[15].'</td>
                <td>'.$promo[16].'</td>
                <td>'.$promo[17].'</td>
                <td>'.$promo[18].'</td>
                <td>'.$promo[19].'</td>
                <td>'.$promo[20].'</td>
                <td>'.$promo[21].'</td>
                <td style="border: hidden">
                <form class="" action="promocion_grado_edicion.php" method="post">
                <input type="text" name="cuip_promo" value="'.$policia[0]->cuip.'" readonly hidden>
                  <button type="submit" class="btn btn-primary" name="button">Promoción</button>
                </form>
                </td>
            </tr>';
    }elseif (empty($policia)) {
      echo "No hay resultado";
    }
  }

  public function obtenerElemento2($control)
  {
    require '../../requires/conexion.php';
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $respuesta = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$control, true, stream_context_create($arrContextOptions));
    $policia=json_decode($respuesta);
    return $policia;
  }

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

    $query_certificado="SELECT * FROM promocion_grado";
    $certificado_respuesta = $conn->query($query_certificado);
    while ($certificado=mysqli_fetch_row($certificado_respuesta)) {
      $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$certificado[1], true, stream_context_create($arrContextOptions));
      $policia = json_decode($response);
      //echo "http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$certificado[1];
      echo '
      <tr>
        <td>'.$policia[0]->nombre.'</td>
        <td>'.$policia[0]->cuip.'</td>
        <td>'.$policia[0]->no_control.'</td>
        <td>'.$certificado[2].'</td>
        <td>'.$certificado[3].'</td>
        <td>'.$certificado[4].'</td>
        <td>'.$certificado[5].'</td>
        <td>'.$certificado[6].'</td>
        <td>'.$certificado[7].'</td>
        <td>'.$certificado[8].'</td>
        <td>'.$certificado[9].'</td>
        <td>'.$certificado[10].'</td>
        <td>'.$certificado[11].'</td>
        <td>'.$certificado[12].'</td>
        <td>'.$certificado[13].'</td>
        <td>'.$certificado[14].'</td>
        <td>'.$certificado[15].'</td>
        <td>'.$certificado[16].'</td>
        <td>'.$certificado[17].'</td>
        <td>'.$certificado[18].'</td>
        <td>'.$certificado[19].'</td>
        <td>'.$certificado[20].'</td>
        <td>'.$certificado[21].'</td>
      </tr>
      ';
    }
  }

    public function serviciorRestsuma()
    {
      $arrContextOptions=array(
          "ssl"=>array(
              'method'=>"GET",
              "verify_peer"=>false,
              "verify_peer_name"=>false,
          ),
      );
      $response = file_get_contents("http://localhost:8080/api/est/5/5", true, stream_context_create($arrContextOptions));
      $policia = json_decode($response);
      //var_dump($policia);
      $num_policias= count($policia);
      for ($i=0; $i < $num_policias ; $i++) {
        echo '
        <tr>
          <td>'.$policia[$i]->suma.'</td>
          <td>'.$policia[$i]->resta.'</td>
          <td>'.$policia[$i]->producto.'</td>
        </tr>
        ';
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
        $query_registro="SELECT * FROM promocion_grado WHERE cuip ='$control'";
      }elseif ($control == "") {
        $query_registro="SELECT * FROM promocion_grado";
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
            <td>'.$registro[6].'</td>
            <td>'.$registro[7].'</td>
            <td>'.$registro[8].'</td>
            <td>'.$registro[9].'</td>
            <td>'.$registro[10].'</td>
            <td>'.$registro[11].'</td>
            <td>'.$registro[12].'</td>
            <td>'.$registro[13].'</td>
            <td>'.$registro[14].'</td>
            <td>'.$registro[15].'</td>
            <td>'.$registro[16].'</td>
            <td>'.$registro[17].'</td>
            <td>'.$registro[18].'</td>
            <td>'.$registro[19].'</td>
            <td>'.$registro[20].'</td>
            <td>'.$registro[21].'</td>
          </tr>
          ';
        }
      }
      $conn->close();
    }
  }

$certificado = new Certificado();

if (isset($_POST["ncontrol"])) {
  if ($_POST["ncontrol"] !="" ) {
    $certificado->obtenerElemento($_POST["ncontrol"]);
  }else {
    $certificado->obtenerRegistros();
  }
}
/*
cuip
numero_conv
folio_prom
fecha_ingreso
categoria_actual
antiguedad_cate
categoria_asp
documentacion
estatus_unidad
estatus_comision
estatus_consejo
estatus_contraloria
fecha_a_examen
resultado_examen
n_ofisio_comision
fecha_progra_eva
resultado_eva
numero_oficio_centro
fecha_emision_hoja_res
numero_sesion_comision
fecha_emision_constancia
*/

if (isset($_POST["cuip"]) && isset($_POST["numero_conv"]) && isset($_POST["folio_prom"])) {
//echo "okokokokokok";

  $certificado->agregarRegistro(
  $_POST["cuip"],$_POST["numero_conv"],$_POST["folio_prom"],$_POST["fecha_ingreso"],$_POST["categoria_actual"],
  $_POST["antiguedad_cate"],$_POST["categoria_asp"],$_POST["documentacion"],$_POST["estatus_unidad"],$_POST["estatus_comision"],
  $_POST["estatus_consejo"],$_POST["estatus_contraloria"],$_POST["fecha_a_examen"],$_POST["resultado_examen"],$_POST["n_ofisio_comision"],
  $_POST["fecha_progra_eva"],$_POST["resultado_eva"],$_POST["numero_oficio_centro"],$_POST["fecha_emision_hoja_res"],$_POST["numero_sesion_comision"],
  $_POST["fecha_emision_constancia"]);

}

if (isset($_POST['n_busqueda'])) {
  $certificado->buscarRegistro($_POST['n_busqueda']);
}
?>
