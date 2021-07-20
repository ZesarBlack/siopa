<?php
    if (isset($_POST['Incidencia'])) {
        $incidencia1  = $_POST['Incidencia'];
    }
    if (isset($_POST['FechaInicio'])) {
        $fecha_inicio  = $_POST['FechaInicio'];
    } 
    if (isset($_POST['FechaFin'])) {
        $fecha_fin  = $_POST['FechaFin'];
    }
    if (isset($_POST['Dias'])) {
        $dias  = $_POST['Dias'];
    }
    if (isset($_POST['Encargado'])) {
        $encargado  = $_POST['Encargado'];
    }
    if (isset($_POST['Observaciones'])) {
        $observaciones  = $_POST['Observaciones'];
    }
    if (isset($_POST['no_control'])) {
        $no_control  = $_POST['no_control'];
    }

    include 'incidencia_clase.php';
    $incidencia = new Incidencia();
    $incidencia = $incidencia->NuevaIncidencia($no_control, $dias, $fecha_inicio, $fecha_fin, $encargado, $observaciones, $incidencia1);

?>