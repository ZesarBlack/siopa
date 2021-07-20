<?php
include '../../requires/conexion.php';
$nombre  = $_POST['nombre'];
$calificacion = $_POST['calificacion'];
$id_curso = $_POST['id_curso'];

echo $nombre;
echo "<br>";
echo $calificacion;
echo "<br>";
echo $id_curso;
echo "<br>";

 if ($nombre != "" &&  $calificacion !="" && $id_curso !="") {
   $query_asignar="UPDATE cadete_tiene_cursos SET calificacion = $calificacion WHERE cadete_idCadete = $nombre AND cursos_idcurso = $id_curso";
   $conn->query($query_asignar);
 }
 $conn->close();
 echo $query_asignar;
 header("Location: asignar.php?curso=".urlencode($id_curso));
 ?>
