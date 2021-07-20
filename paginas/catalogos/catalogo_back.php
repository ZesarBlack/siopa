<?php

class catalogo {

    public function Leer($dat1) {
      include '../../requires/conexion.php';
      $cat = $conn->real_escape_string($dat1);

      $conn->query("SET CHARACTER SET 'utf8'");
      $query_bienes="SELECT * FROM $cat";
      $res_query = $conn->query($query_bienes);
      //$datos=mysqli_fetch_row($res_query);

      while($datos=mysqli_fetch_row($res_query)){
      echo
            "<tr>
               <td>".$datos[0]."</td>
               <td>".$datos[1]."</td>
            </tr>";
          }

      //return $datos;
      //echo $cat;
      $conn->close();
     }
  }
  if (isset($_POST['catalogo'])) {
    $catalogo  = $_POST['catalogo'];
    $leer = new catalogo();
    $datos2 = $leer -> Leer($catalogo);
    }

  ?>
