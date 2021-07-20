<?php
//if (isset($_POST['nombre'])) {


//  }
class curso {

    public function listCursos()
    {
      require '../../requires/conexion.php';
      $query_lista = "SELECT * FROM cursos where no_control like '%Policia%'";
      $lista_cursos = $conn->query($query_lista);
      $conn->close();
      while ($lista = mysqli_fetch_array($lista_cursos)) {
        echo '
        <tr>
          <td>'.$lista[1].'</td>
          <td>'.$lista[3].'</td>
          <td>'.$lista[4].'</td>
          <td>'.$lista[5].'</td>
          <td>'.$lista[6].'</td>
          <td>'.$lista[9].'</td>
          <td>'.$lista[10].'</td>
          <td>'.$lista[11].'</td>
          <td>'.$lista[12].'</td>
          <td>
            <form class="" action="asignar.php" method="post">
              <input type="text" name="curso" value="'.$lista[0].'" readonly hidden>
              <button type="submit" class="btn btn-primary" name="button">Agregar Policias al curso</button>
            </form>
          </td>
        </tr>
        ';
      }
    }

    public function infoCurso($id)
    {
      require '../../requires/conexion.php';
      $query_curso="SELECT * FROM cursos WHERE idcurso = '$id'";
      $respuesta_curso =$conn->query($query_curso);
      $conn->close();

      $curso = mysqli_fetch_row($respuesta_curso);

      return $curso;
    }

    public function LeerCadete($dat1) {
      //require '../../requires/conexion.php';
        $arrContextOptions=array(
            "ssl"=>array(
                'method'=>"GET",
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $response = file_get_contents("https://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&cuip=".$dat1, true, stream_context_create($arrContextOptions));
        $policia = json_decode($response);
        //echo $policia;
        if (!empty($policia)) {
          echo "<h1>Elemento</h1>
          <thead>
            <th>Número de control</th>
            <th>Nombre</th>
            <th>CURP</th>
            <th>Tipo de empleado</th>
          </thead>
          ";
          echo
                "<tr>
                   <td>".$policia->{'no_control'}."</td>
                   <td>".$policia->{'nombre'}."</td>
                   <td>".$policia->{'curp'}."</td>
                   <td>".$policia->{'tipo_empleado'}."</td>
                </tr>";

        }
     }

     public function registrarPolicia($nom_control, $curso)
     {
       include '../../requires/conexion.php';

        if ($nom_control != "" &&  $curso !="") {
          $query_asignar="INSERT INTO cursos_policias ( id_curso, control_pol) VALUES ('$curso', '$nom_control')";
          echo $query_asignar;
       //  echo $query;
          $conn->query($query_asignar);
        }
        $conn->close();
        header('Location:asignar.php?curso='.$curso);
     }

     public function obtenerRegistrados($id_curso)
     {
           $arrContextOptions=array(
               "ssl"=>array(
                   'method'=>"GET",
                   "verify_peer"=>false,
                   "verify_peer_name"=>false,
               ),
           );

           include '../../requires/conexion.php';
           $query_alumno="SELECT * FROM cursos_policias where id_curso = $id_curso";
           $res_query= $conn->query($query_alumno);
           while ($ver_nombre=mysqli_fetch_row($res_query)) {

             $response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&cuip=".$ver_nombre[1], true, stream_context_create($arrContextOptions));
             $policia = json_decode($response);
             echo
                   "<tr>
                      <td>".$policia->{'no_control'}."</td>
                      <td>".$policia->{'cuip'}."</td>
                      <td>".$policia->{'nombre'}."</td>
                      <td>".$policia->{'curp'}."</td>
                      <td>".$policia->{'tipo_empleado'}."</td>
                      <td>".$ver_nombre[2]."</td>
                   </tr>";
           }
           $conn->close();
      }
  }

  $leer = new curso();

  if (isset($_POST['cuip'])) {
      $leer -> LeerCadete($_POST['cuip']);
      //echo "string";
    // code...
  }

  if (isset($_POST['cuip']) && isset($_POST['id_curso'])) {
    $cadete = $_POST['cuip'];
    $curso = $_POST['id_curso'];

    $leer -> RegistrarPolicia($cadete, $curso);
  }
  ?>
