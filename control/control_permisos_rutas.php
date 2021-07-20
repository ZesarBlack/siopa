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
            'formacionContinua' => 1,
        ),
        array(
            'asignar_curso_policia' => 1,
        ),
        array(
            'calificar_policias' => 1,
        ),
        array(
            'ingresos' => 1,
        ),
        array(
            'capacitacion_continua' => 1,
        ),
        array(
            'pruebas' => 1,
        ),
        array(
            'Sol_Control_Conf' => 1,
        ),
        array(
            'competencias_basicas' => 1,
        ),
        array(
            'evaluacion_desempeno' => 1,
        ),
        array(
            'certificado_u_policial' => 1,
        ),

        array(
            'historial_policia' => 1,
        ),
        array(
            'promocion_grado' => 1,
        ),
        array(
            'estimulos' => 1,
        ),
        array(
            'licencias_y_comisiones' => 1,
        ),
        array(
            'procedimiento_administrativo' => 1,
        ),
        array(
            'regimen_diciplinario' => 1,
        ),
        array(
            'conclusion_servicio' => 1,
        ),
        array(
            'documentacion_policia' => 1,
        ),
        array(
            'seguimiento_elemento' => 1,
        ),
        array(
            'subir' => 1,
        ),
        array(
            'expediente_individual' => 1,
        )


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
