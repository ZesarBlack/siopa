<?php
if (isset($_POST['curso'])) {
    $curso  = $_POST['curso'];
}

  //$nombre  = $_POST['nombre'];
  //$calificacion = $_POST['calificacion'];
  //$id_curso = $_POST['id_curso'];
class Calificacion {

    public function Leer( $dat2) {
      $arrContextOptions=array(
          "ssl"=>array(
              'method'=>"GET",
              "verify_peer"=>false,
              "verify_peer_name"=>false,
          ),
      );
      $response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&control=".$dat2, true, stream_context_create($arrContextOptions));
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

     public function calificar($nom, $calf, $id_curso){
           include '../../requires/conexion.php';
           $conn->query("SET CHARACTER SET 'utf8'");
           if ($nom != "" &&  $calf !="") {
             $query_asignar="INSERT INTO cedula_tiene_cursos (calificacion) VALUES ($calf) WHERE cedula_id_cedula = $nom AND cursos_idcurso = $id_curso";
             $conn->query($query_asignar);
             while($ver=mysqli_fetch_row($res_query)){
           }
         }
      }

    public function obtenerCursos($cuip){
      include '../../requires/conexion.php';
      //echo $curso;
      $sql_res= "SELECT * FROM cursos_policias WHERE control_pol = '$cuip'";
      //echo $sql_res;
      $res2 = $conn->query($sql_res);
      while ($datos = mysqli_fetch_array($res2)) {

        $query_lc="SELECT * FROM cursos where idcurso = '$datos[0]'";
        //echo $query_lc ;
        $curso = $conn->query($query_lc);
        $datos_cur=mysqli_fetch_array($curso);
        echo '
        <tr>
          <td>'.$datos_cur[3].'</td>
          <td>'.$datos_cur[10].'</td>
          <td>'.$datos_cur[11].'</td>
          <td>'.$datos_cur[12].'</td>
          <td>'.$datos[2].'</td>

        </tr>
        ';

      }
        $conn->close();
    }

    public function obtenerPromedio($cuip)
    {
      include '../../requires/conexion.php';
      $query_promedio="SELECT AVG(calf) FROM cursos_policias WHERE control_pol = '$cuip'";
      $res = $conn->query($query_promedio);
      $primedio = mysqli_fetch_array($res);
      $conn->close();
      return $primedio[0];
    }
}
$calificacion = new Calificacion();
?>
