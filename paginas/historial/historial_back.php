<?php
if (isset($_POST['curso'])) {
    $curso  = $_POST['curso'];
}

  //$nombre  = $_POST['nombre'];
  //$calificacion = $_POST['calificacion'];
  //$id_curso = $_POST['id_curso'];
class curso {

    public function Leer( $dat2) {
      include '../../requires/conexion.php';
      //$conn->query("SET CHARACTER SET 'utf8'");
      $curso1 = $conn->real_escape_string($dat2);
      if ($curso1 != "") {
              $query_curso="SELECT * FROM cadete WHERE idCadete like '%$curso1%'";
              $res_query2 = $conn->query($query_curso);
                echo "<h1>Cadete</h1>";
                echo '
                <tr>
                  <td>ID cadete</td>
                  <td>Nombre</td>
                  <td>Apeliido paterno</td>
                  <td>Apellido materno</td>
                  <td>Teléfono movil</td>
                  <td>CURP</td>
                </tr>
                ';

                  while($datos2=mysqli_fetch_row($res_query2)){
                  echo
                        "<tr>
                          <td>".$datos2[0]."</td>
                          <td>".$datos2[6]."</td>
                          <td>".$datos2[4]."</td>
                          <td>".$datos2[5]."</td>
                          <td>".$datos2[12]."</td>
                          <td>".$datos2[13]."</td>
                       </tr>";
                   }
      }

      $conn->close();
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
}

  $leer = new curso();
  $leer->Leer($curso);
  ?>
