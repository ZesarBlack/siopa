<?php
//if (isset($_POST['nombre'])) {
  $n_usr  = $_POST['nombre'];
  $f_usr  = $_POST['fecha'];
  $t_usr  = $_POST['tipo'];
//  }
class bitacora {

    public function Leer($dat1, $dat2, $dat3) {
      include '../../requires/conexion.php';
      $nombre = $conn->real_escape_string($dat1);
      $fecha = $conn->real_escape_string($dat2);
      $tipo = $conn->real_escape_string($dat3);
      $conn->query("SET CHARACTER SET 'utf8'");

      if ($nombre != "" && $fecha == "" && $tipo == "") {
          $query_bienes="SELECT * FROM Bitacora WHERE Nombre_Tabla like '%$nombre%'";
      }elseif ($nombre == "" && $fecha != "" && $tipo == "") {
           $query_bienes="SELECT * FROM Bitacora WHERE Fecha_Hora like '%$fecha%'";
      }elseif ($nombre == "" && $fecha == "" && $tipo != "") {
           $query_bienes="SELECT * FROM Bitacora WHERE tipo_usuario like '%$tipo%'";//-----1
      }elseif ($nombre != "" && $fecha != "" && $tipo == "") {
           $query_bienes="SELECT * FROM Bitacora WHERE Nombre_Tabla like '%$nombre%' AND Fecha_Hora LIKE'%$fecha%'";
      }elseif ($nombre != "" && $fecha == "" && $tipo != "") {
           $query_bienes="SELECT * FROM Bitacora WHERE Nombre_Tabla like '%$nombre%' AND tipo_usuario LIKE '%$tipo%'";
      }elseif ($nombre == "" && $fecha != "" && $tipo != "") {
           $query_bienes="SELECT * FROM Bitacora WHERE Fecha_Hora like '%$fecha%' AND tipo_usuario LIKE '%$tipo%'";//------2
      }elseif ($nombre != "" && $fecha != "" && $tipo != "") {
           $query_bienes="SELECT * FROM Bitacora WHERE tipo_usuario like '%$tipo%' AND Fecha_Hora LIKE'%$fecha%' AND Nombre_Tabla like '%$nombre%'";
      }else {
        $query_bienes="SELECT * FROM Bitacora";
      }
      $res_query = $conn->query($query_bienes);
      //$datos=mysqli_fetch_row($res_query);
      while($datos=mysqli_fetch_row($res_query)){
      echo
            "<tr>
               <td>".$datos[2]."</td>
               <td>".$datos[3]."</td>
               <td>".$datos[1]."</td>
               <td>".$datos[5]."</td>
            </tr>";
          }
      //return $datos;
      $conn->close();
     }
  }
  $leer = new bitacora();
  $datos2 = $leer -> Leer($n_usr, $f_usr, $t_usr);
  ?>
