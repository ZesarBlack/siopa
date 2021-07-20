<?php
if (isset($_POST['curso'])) {
    $curso  = $_POST['curso'];
}

  //$nombre  = $_POST['nombre'];
  //$calificacion = $_POST['calificacion'];
  //$id_curso = $_POST['id_curso'];
class curso {

    public function Leer() {
      include '../../requires/conexion.php';
      //$curso1 = $conn->real_escape_string($dat2);

      //$conn->query("SET CHARACTER SET 'utf8'");

              $query_curso="SELECT * FROM cursos WHERE nombre like '%Formacion%'";
              $res_query2 = $conn->query($query_curso);
              //echo $query_curso;
                echo "<h1>Cursos</h1>";
                  while($datos2=mysqli_fetch_row($res_query2)){
                  echo
                        "<tr>
                          <td><h2>".$datos2[1]."</h2></td>
                          <td><h2>".$datos2[3]."</h2></td>
                          <td><h2>".$datos2[4]."</h2></td>
                          <td><h2>".$datos2[5]."</h2></td>
                          <td><h2>".$datos2[6]."</h2></td>
                          <td><h2>".$datos2[10]."</h2></td>
                          <td><h2>".$datos2[11]."</h2></td>
                          <td><h2>".$datos2[12]."</h2></td>
                          <td>
                          <form class='' action='asignar.php' method='post'>
                            <input type='text' name='curso' value='".$datos2[0]."' hidden>
                            <button type='submit' class='btn btn-primary' name='button' '>
                              Asignar Calificaciones
                            </button>
                          </form>
                          </td>
                       </tr>";
                   }

      $conn->close();
     }

     public function calificar($nom, $calf, $id_curso){
       include '../../requires/conexion.php';
       //$conn->query("SET CHARACTER SET 'utf8'");
       if ($nom != "" &&  $calf !="") {
         $query_asignar="INSERT INTO cedula_tiene_cursos (calificacion) VALUES ($calf) WHERE cedula_id_cedula = $nom AND cursos_idcurso = $id_curso";
         $conn->query($query_asignar);
       }
       $conn->close();
     }
  }


  //$datos3 = $leer -> calificar($nombre, $calificacion, $id_curso);
  ?>
