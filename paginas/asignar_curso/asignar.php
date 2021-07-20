<?php
include '../../requires/conexion.php';
 $cadete = $_POST['nombre'];
 $curso = $_POST['curso'];
 echo $curso."<br>";
 echo $cadete."<br>";

 $query="SELECT idcurso FROM cursos where nombre = '$curso'";
 $res = $conn->query($query);
 $id = mysqli_fetch_row($res);

 if ($cadete != "" &&  $curso !="") {
   $query_asignar="INSERT INTO cadete_tiene_cursos (cadete_idCadete, cursos_idcurso) VALUES ('$cadete', '$id[0]')";
   echo $query_asignar;
   $conn->query($query_asignar);
 }
 $conn->close();
 header('Location:asignar_curso.php');
 ?>
