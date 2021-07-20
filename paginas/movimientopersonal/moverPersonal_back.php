<?php
    $no_control = $_POST["no_control"];
    $direccionActual= $_POST["direccionActual"];
    $departamentoAnterior= $_POST["departamentoAnterior"]; 
    $departamentoActual= $_POST["departamentoActual"]; 
    $actividadAnterior= $_POST["actividadAnterior"]; 
    $actividadActual= $_POST["actividadActual"]; 
    $funcionAnterior= $_POST["funcionAnterior"]; 
    $funcionActual= $_POST["funcionActual"]; 
    $horarioAnterior= $_POST["horarioAnterior"]; 
    $horarioActual= $_POST["horarioActual"]; 
    $sueldoAnterior= $_POST["sueldoAnterior"]; 
    $sueldoActual= $_POST["sueldoActual"]; 
    $apartirde= $_POST["apartirde"]; 
    $con_documentos= $_POST["con_documentos"]; 
    $observaciones= $_POST["observaciones"]; 
    $ahora = (new \DateTime())->format('Y-m-d H:i:s'); 
    include 'movimientos_class.php';
    $claseMovimiento = new Movimiento();
    $claseMovimiento->updateMovimiento(
        $no_control, $direccionActual, $departamentoAnterior, $departamentoActual, $actividadAnterior, $actividadActual, $funcionAnterior, $funcionActual,
        $horarioAnterior, $horarioActual, $sueldoAnterior, $sueldoActual, $apartirde, $con_documentos, $observaciones, $ahora);
    header("Location: ../ReingresoP");
?>