<?php
session_start();
include '../../requires/conexion.php';
$id_curso =$_POST['id_curso'];
$id_cadete = $_SESSION['id'];
$a=$_POST['1'];
$b=$_POST['2'];
$c=$_POST['3'];
$d=$_POST['4'];
$e=$_POST['5'];
$f=$_POST['6'];
$g=$_POST['7'];
$h=$_POST['8'];
$i=$_POST['9'];
$j=$_POST['10'];
$k=$_POST['11'];
$l=$_POST['12'];
$m=$_POST['13'];
$n=$_POST['14'];
$o=$_POST['15'];
$respuestas = array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o);
$in = 1;
foreach ($respuestas as $res) {
  $consulta= "INSERT INTO cuestionario (id_curso, id_cadete, num_pregunta, respuesta)
                          VALUES ('$id_curso', '$id_cadete' ,'$in', '$res')";
                          $resultado= mysqli_query($conn, $consulta);
  $in = $in+1;
}
mysqli_close($conn);

header('location: ../inicio/home.php');
?>
