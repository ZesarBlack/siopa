<?php
/**
 *
 */
class Docente
{

  function registrar($nombre, $paterno, $materno)
  {
    include '../../requires/conexion.php';
    $conn->query("SET CHARACTER SET 'utf8'");
    $query_docente="INSERT INTO docente (nombre, apellido_paterno, apellido_materno) VALUES ('$nombre' ,'$paterno', '$materno')";

//    echo $query_docente;

    $conn->query($query_docente);
    $conn->close();
    //echo $nombre;
    //echo $paterno;
    //echo $materno;
  }
}

 ?>
