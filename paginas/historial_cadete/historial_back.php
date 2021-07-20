<?php
/**
 *
 */
class Cadete
{

  function obtenerCalf($id_cadete)
  {
    include '../../requires/conexion.php';
    $query_alumno="SELECT idcurso, nombre, horas, lugar, calificacion  FROM cursos INNER JOIN cedula_tiene_cursos ON cursos.idcurso = cedula_tiene_cursos.cursos_idcurso WHERE cedula_id_cedula = $curso";
    $res_query = $conn->query($query_alumno);

  }
}

 ?>
