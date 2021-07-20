<?php
/**
 *
 */
class Citas
{
  private $nom;
  private $fech;
  private $hor;
  private $tip;
  private $lug;
  private $id_usr;

  function Citar($persona, $tipo, $lugar, $fecha, $hora , $id)
  {
    include '../../requires/conexion.php';
    $nom=$persona;
    $fech=$fecha;
    $hor=$hora;
    $tip=$tipo;
    $lug=$lugar;
    $id_usr=$id;

    $query_cita="INSERT INTO citas (nombre_aspirante, tipo_cita, lugar, fecha, hora, idusr) VALUES ('$nom', '$tip', '$lug', '$fech', '$hor', '$id_usr')";
    $conn->query($query_cita);
    //echo $query_cita;
    /*
    echo "back dice: ".$nom."<br>";
    echo "back dice: ".$fech."<br>";
    echo "back dice: ".$hor."<br>";
    echo "back dice: ".$tip."<br>";
    echo "back dice: ".$lug."<br>"; */


  }
  function obtenerUsuario($id_usr)
  {
    include '../../requires/conexion.php';
    $query_usr="SELECT id_cedula, NOMBRE, PATERNO, MATERNO FROM cedula WHERE id_cedula = '$id_usr'";
    $conn->query("SET CHARACTER SET 'utf8'");
    $usr_resul = $conn->query($query_usr);
    $usr=mysqli_fetch_array($usr_resul);
    //echo $usr['NOMBRE'];
    return $usr;
  }
}
$cita = new Citas();
if (isset($_POST['tipo']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['lugar'])) {
  //echo $nombre;
  $cita -> Citar($_POST['nombre'], $_POST['tipo'], $_POST['lugar'], $_POST['fecha'],$_POST['hora'], $_POST['id_usr']);
  header("Location: ../lista_cadetes/lista_cadetes.php");
}


 ?>
