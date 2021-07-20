<?php
if (isset($_POST['curso'])) {
    $curso  = $_POST['curso'];
}

class Cursos {

    public function Leer() {
      include '../../requires/conexion.php';

              $query_curso="SELECT * FROM cursos WHERE no_control like '%Policia%'";
              $res_query2 = $conn->query($query_curso);
              //echo $query_curso;
                echo "<h1>Curso</h1>";
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
         $query_asignar="UPDATE cursos_policias SET calf = '$calf' WHERE control_pol = '$nom' AND id_curso = '$id_curso'";
         //echo $query_asignar;
         $conn->query($query_asignar);

         header("Location: asignar.php?curso=".urlencode($id_curso));
         $conn->close();
     }

     public  function darBaja($idAlumno, $idCurso){
         include '../../requires/conexion.php';
         $query = "DELETE from cadete_tiene_cursos where cadete_idCadete = '$idAlumno' and cursos_idcurso='$idCurso'";
         if ($conn->query($query) === TRUE) {
             echo "Record deleted successfully";
           } else {
             echo "Error deleting record: " . $conn->error;
           }

           $conn->close();
           header('Location: asignar.php?curso='.$idCurso);
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
      public function infoCurso($id_curso)
      {
        include '../../requires/conexion.php';
        $query_curso="SELECT * FROM cursos WHERE idcurso = '$id_curso'";
        $res_info = $conn->query($query_curso);
        $ver_info=mysqli_fetch_row($res_info);
        $infoCurso = [
            "nombre" => $ver_info[3],
            "generacion" => $ver_info[4],
            "grupo" => $ver_info[5],
            "periodo" => $ver_info[6],
        ];
        $conn->close();
        return $infoCurso;
      }
    }
  //se crear una instancia de la clase
  $curso = new Cursos();
  //se revisa wue las variables no estan vacias
  if (isset($_POST['nombre']) && isset($_POST['calificacion']) && isset($_POST['id_curso'])) {
    $nombre  = $_POST['nombre'];
    //echo "<br>";
    $calificacion = $_POST['calificacion'];
    //echo "<br>";
    $id_curso = $_POST['id_curso'];
    //se mandan las variables a la función
    $curso->calificar($nombre, $calificacion, $id_curso);
  }

  if (isset($_POST['nombre']) && isset($_POST['curso'])) {
      $curso->darBaja($_POST['nombre'], $_POST['curso']);
  }
  ?>
