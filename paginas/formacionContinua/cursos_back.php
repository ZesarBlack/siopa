<?php
    //require_once '../../requires/conexion.php';
    require_once 'clase_curso.php';
    $guardar = new curso();
    if (isset($_POST['NombreCurso']) ) {
        $Nombre  = $_POST['NombreCurso'];
    }
    if (isset($_POST['CursoPara'])) {
        $CursoPara  = $_POST['CursoPara'];
    }
    if (isset($_POST['TipoCurso'])) {
        $TipoCurso  = $_POST['TipoCurso'];
    }
    if (isset($_POST['TipoCalificacion'])) {
        $TipoCalificacion  = $_POST['TipoCalificacion'];
    }

    if (isset($_POST['FechaInicio'])) {
        $fecha_inicio  = $_POST['FechaInicio'];
    }else {
      // code...
      $fecha_inicio  = '2021-02-19';
    }
    if (isset($_POST['FechaFinal'])) {
        $fecha_fin  = $_POST['FechaFinal'];
    }else {
      // code...
      $fecha_fin  = '2021-02-19';
    }

    if (isset($_POST['Horas'])) {
        $horas  = $_POST['Horas'];
    }
    if (isset($_POST['Lugar'])) {
        $lugar  = $_POST['Lugar'];
    }
    if (isset($_POST['Entidad'])) {
        $entidad  = $_POST['Entidad'];
    }
    if (isset($_POST['Observaciones'])) {
        $observaciones  = $_POST['Observaciones'];
    }
    if (isset($_POST['FileName'])) {
        $fileName  = $_POST['FileName'];
    }

    if (isset($_POST['naturaleza']) && $_POST['naturaleza'] == "inicial") {
      echo  $_POST['naturaleza']."<br>";
      echo  $_POST['NombreCurso']."<br>";
      echo  $_POST['generacion']."<br>";
      echo  $_POST['grupo']."<br>";
      echo  $_POST['per']."<br>";
      echo  $_POST['Horas']."<br>";
      echo  $_POST['Lugar']."<br>";
      echo  $_POST['Entidad']."<br>";
      echo  $_POST['Observaciones']."<br>";
      // code...
          $guardar -> NuevoCurso($Nombre, $_POST['generacion'], $_POST['grupo'], $_POST['per'],$CursoPara, $TipoCurso, $TipoCalificacion, $fecha_inicio, $fecha_fin, $horas, $lugar, $entidad, $observaciones, $fileName);
      header("Location: cursos.php");
    }elseif(isset($_POST['naturaleza']) && $_POST['naturaleza'] == "normal") {
          $guardar -> NuevoCurso($Nombre, $_POST['generacion'], $_POST['grupo'], $_POST['per'], $CursoPara, $TipoCurso, $TipoCalificacion, $fecha_inicio, $fecha_fin, $horas, $lugar, $entidad, $observaciones, $fileName);
      header("Location: cursos.php");
    }
    echo  $_POST['naturaleza'];
?>
