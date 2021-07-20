<?php
/**
 *
 */
class Documentos
{
  function getArchivos(){
    require '../../requires/conexion.php';
    $query = "SELECT * FROM documentos";
    $respuesta = $conn->query($query);
    while ($datos=mysqli_fetch_array($respuesta)) {
      echo "
      <tr>
        <td>$datos[0]</td>
        <td>$datos[1]</td>
        <td><a href='$datos[2]/$datos[1]' target='_blank'>$datos[2]/$datos[1]</a></td>
      </tr>
      ";
    }
  }
}

?>
