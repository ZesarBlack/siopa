<?php
/**
 *
 */
class Cadete
{
  public function detallesCadete($id)
  {
    require '../../requires/conexion.php';
    $query="SELECT * FROM cadete WHERE idCadete = '$id'";
    $resultado = $conn->query($query);
    $datos = mysqli_fetch_array($resultado);
    return $datos;
    $conn->close();
  }

  public function obtenerDocs($curp)
  {
    require '../../requires/conexion.php';
    $querydocs="SELECT * FROM documentos WHERE curp = '$curp'";
    $resultadocs = $conn->query($querydocs);
    //$docs = mysqli_fetch_array($resultadocs);
    //echo $querydocs;
    while ($docs=mysqli_fetch_array($resultadocs)) {
      echo "
      <tr>
        <td>$docs[1]</td>
        <td><a href='$docs[2]/$docs[1]' target='_blank'>$docs[2]/$docs[1]</a></td>
      </tr>
      ";
    }
    return $docs;
    $conn->close();
  }
}

 ?>
