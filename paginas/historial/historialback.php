<?php
if (isset($_POST['idcadete'])) {
    $curso  = $_POST['idcadete'];
}
if (isset($_POST['curso']) && isset(  $curso = $_POST['function'];)) {

}

  //$nombre  = $_POST['nombre'];
  //$calificacion = $_POST['calificacion'];
  //$id_curso = $_POST['id_curso'];
class idcadete {

    public function Leer( $dat2) {
      include '../../requires/conexion.php';
      $curso1 = $conn->real_escape_string($dat2);

      $conn->query("SET CHARACTER SET 'utf8'");
      if ($curso1 != "") {
              $query_curso="SELECT * FROM cursos WHERE id_curso like '%$curso1%'";
              $res_query2 = $conn->query($query_curso);
                echo "<h1>Cadete</h1>";
                  while($datos2=mysqli_fetch_row($res_query2)){
                  echo
                        "<tr>
                          <td>".$datos2[3]."</td>
                          <td>".$datos2[5]."</td>
                          <td>".$datos2[6]."</td>
                       </tr>";
                   }
      }

      $conn->close();
     }

     function obtenerCursos(){
       $query_alumno="SELECT idcurso, nombre, horas, lugar, calificacion  FROM cursos INNER JOIN cedula_tiene_cursos ON cursos.idcurso = cedula_tiene_cursos.cursos_idcurso WHERE cedula_id_cedula = $curso";
       $res_query = $conn->query($query_alumno);
     }


  }

  $cadete = new idcadete();

  if (isset($_POST['idcadete'])) {
      $curso  = $_POST['idcadete'];
  }
  if (isset($_POST['curso']) && isset($_POST['function'])) {
    $cadete->obtenerCursos($_POST['curso']);
  }
  ?>
