<?php
/**
 *
 */
class Rutas
{
  public function verificarRutas($ruta, $rol)
  {
    //se manipula la ruta para obtener la carpeta de la pagina
    $ruta_general = explode('\\', $ruta);
    $pagina_actual = count($ruta_general);
    $ruta_actual = $ruta_general[$pagina_actual-1];
    // se integran la carpeta de la pagina y su rol
    //echo $ruta_actual;
    $permisos = array(
        array(
            'inicio' => 1,
        ),
        array(
            'documentacion' => 1,
        ),

    );

    //se hace la busqueda de la página en la que se esta actualmente
    $validacion = array_column($permisos, $ruta_actual);
    //echo $ruta_actual;
    $contador =0;
    $hay_permiso = 0;
    if (count($validacion)>0) {
      for ($i=0; $i < count($validacion) ; $i++) {
        if ($validacion[$i] == $rol) {
          //echo "hay permiso";
          $hay_permiso = 1;
        }
      }
    }
    if ($hay_permiso == 0) {
      header("Location: ../index.php");
    }
  }
}

$ruta = new Rutas();
 ?>
