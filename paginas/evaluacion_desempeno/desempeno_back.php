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
}

$desempeno = new Desempeno();

if (isset($_POST['control'])) {
  $desempeno->obtenerElemento($_POST['control']);
  //echo "okokokokokokok";  // code...
}

if (isset($_POST['n_busqueda'])) {
    $desempeno->buscarRegistro($_POST['n_busqueda']);
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
