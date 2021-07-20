<?php

class Seguridad
{
  public function auditarPagina($usuario, $pagina)
  {
    $d = new DateTime();
    $fecha = $d->format('Y-m-d H:i');

    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $hosts = gethostbyname($hostname);
    if (is_array($hosts)) {
          foreach ($hosts as $ip) {
              $ip;
          }
        } else {
            $ip="No se encontr&oacute; IP";
        }
    $localIp = gethostbyname(gethostname());
    $ruta_general = explode('\\', $pagina);
    $pagina_actual = count($ruta_general);
    $ruta_actual = $ruta_general[$pagina_actual-1];
    //echo $localIp;
    require '../../requires/conexion.php';
    $query_auditoria="INSERT INTO registro_accesos (usuario, ip, pagina, fecha) values ('$usuario', '$hosts', '$ruta_actual', '$fecha')";
    $conn->query($query_auditoria);
    $conn->close();
  }
}
$seguridad = new Seguridad();

 ?>
