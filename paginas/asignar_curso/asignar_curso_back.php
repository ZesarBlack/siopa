<?php
//if (isset($_POST['nombre'])) {
  $nombre  = $_POST['nombre'];
  $curso  = $_POST['curso'];
//  }
class curso {

    public function LeerCadete($dat1) {
      include '../../requires/conexion.php';
      $nombre1 = $conn->real_escape_string($dat1);
      //$conn->query("SET CHARACTER SET 'utf8'");
      if ($nombre1 != "") {
              $query_cadete="SELECT * FROM cadete WHERE idCadete like '$nombre1'";
              $res_query = $conn->query($query_cadete);
              echo "<h1>Elemento</h1>
              <thead>
                <th>ID del cadete</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
              </thead>
              ";
              while($datos1=mysqli_fetch_row($res_query)){
              echo
                    "<tr>
                       <td>".$datos1[0]."</td>
                       <td>".$datos1[6]."</td>
                       <td>".$datos1[4]."</td>
                       <td>".$datos1[5]."</td>
                    </tr>";
                }
      }
       //$datos1="";
       //$datos2="";
      $conn->close();
     }

     function leerCurso($curso)
     {
      require '../../requires/conexion.php';
      $curso1 = $conn->real_escape_string($curso);
       if ($curso1 != "") {
               $query_curso="SELECT * FROM cursos WHERE nombre like '%$curso1%' AND no_control = 'Cadetes' AND estado = 'en curso'";
               $res_query2 = $conn->query($query_curso);
               echo "<h1>Curso</h1>
               <thead>
                 <th>ID curso</th>
                 <th>Nombre del curso</th>
                 <th>Fecha de inicio</th>
                 <th>Fecha de fin</th>
                 <th>Lugar</th>
               </thead>
               ";
                 while($datos2=mysqli_fetch_row($res_query2)){
                 echo
                       "<tr>
                         <td>".$datos2[0]."</td>
                         <td>".$datos2[3]."</td>
                         <td>".$datos2[5]."</td>
                         <td>".$datos2[6]."</td>
                         <td>".$datos2[8]."</td>
                      </tr>";
                  }
       }
      $conn->close();
     }
  }
  $leer = new curso();
  $leer -> LeerCadete($nombre);
  $leer -> leerCurso($curso);
  ?>
