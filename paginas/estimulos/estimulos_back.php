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
}

 ?>
