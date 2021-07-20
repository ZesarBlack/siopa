<?php
/**
 *
*/
class Certificado
{
  public function agregarRegistro($cuip ,$cup, $fecha_por_eva, $fecha_conclu_cap, $fecha_eva_comp ,$fecha_eva_desemp ,$fecha_emision_cup)
  {
    require '../../requires/conexion.php';
    $query_ingresar="INSERT INTO certificado_u_policial (ncontrol ,cup, fecha_por_eva, fecha_conclu_cap, fecha_eva_comp, fecha_eva_desemp,  fecha_emision_cup)
    VALUES ('$cuip' ,'$cup', '$fecha_por_eva', '$fecha_conclu_cap', '$fecha_eva_comp' ,'$fecha_eva_desemp' ,'$fecha_emision_cup')";
    echo $query_ingresar;
    $conn->query($query_ingresar);
    $conn->close();
    header("Location:certificado_policial.php");
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
    $respuesta = file_get_contents("https://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$control, true, stream_context_create($arrContextOptions));
    $policia=json_decode($respuesta);
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

    $query_certificado="SELECT * FROM certificado_u_policial";
    $certificado_respuesta = $conn->query($query_certificado);
    while ($certificado=mysqli_fetch_row($certificado_respuesta)) {
      $response = file_get_contents("http://172.18.0.28/swebAcademia/servicio/?pass=c3s4RM494p&user=cesar&cuip=".$certificado[1], true, stream_context_create($arrContextOptions));
      $policia = json_decode($response);
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
        $query_registro="SELECT * FROM certificado_u_policial WHERE ncontrol ='$control'";
      }elseif ($control == "") {
        $query_registro="SELECT * FROM certificado_u_policial";
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
           </tr>
           ';
        }
      }
      $conn->close();
    }
  }
$certificado = new Certificado();


if (isset($_POST["ncontrol"])) {
  $certificado->obtenerElemento($_POST["ncontrol"]);
}

if (isset($_POST["control"]) && isset($_POST["cup"]) && isset($_POST["proceso"])) {
  $certificado->agregarRegistro($_POST["control"],$_POST["cup"],$_POST["proceso"],$_POST["conclusion"],$_POST["evaluacion"],$_POST["desempeno"],$_POST["emision"]);
}

if (isset($_POST['n_busqueda'])) {
  $certificado->buscarRegistro($_POST['n_busqueda']);
}
?>
