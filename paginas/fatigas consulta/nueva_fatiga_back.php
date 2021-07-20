<?php
    if (isset($_POST['Fecha'])) {
        $fecha = $_POST['Fecha'];
    } 
    if (isset($_POST['Turno'])) {
        $turno  = $_POST['Turno'];
    } 
    if (isset($_POST['Base'])) {
        $base  = $_POST['Base'];
    }
    if (isset($_POST['Establecido'])) {
        $establecido  = $_POST['Establecido'];
    }
    if (isset($_POST['Escolta'])) {
        $escolta  = $_POST['Escolta'];
    }
    if (isset($_POST['Tierra'])) {
        $tierra  = $_POST['Tierra'];
    }
    if(isset($_POST['Incapacitados'])){
        $incapacitados = $_POST['Incapacitados'];
    }
    if (isset($_POST['Francos'])) {
        $francos = $_POST['Francos'];
    } 
    if (isset($_POST['Comisionados'])) {
        $comisionados  = $_POST['Comisionados'];
    } 
    if (isset($_POST['Faltas'])) {
        $faltas  = $_POST['Faltas'];
    }
    if (isset($_POST['Vacaciones'])) {
        $vacaciones  = $_POST['Vacaciones'];
    }
    if (isset($_POST['Arrestos'])) {
        $arrestos  = $_POST['Arrestos'];
    }
    if (isset($_POST['Permisos'])) {
        $permisos  = $_POST['Permisos'];
    }
    if(isset($_POST['Cursos'])){
        $cursos = $_POST['Cursos'];
    }
    if (isset($_POST['Confianza'])) {
        $confianza  = $_POST['Confianza'];
    }
    if (isset($_POST['Suspendidos'])) {
        $suspendidos  = $_POST['Suspendidos'];
    }
    if (isset($_POST['Bajas'])) {
        $bajas  = $_POST['Bajas'];
    }
    if(isset($_POST['Otros'])){
        $otros = $_POST['Otros'];
    }
    if(isset($_POST['no_control'])){
        $no_control = $_POST['no_control    '];
    }
    
    include 'clase_fatiga.php';
    $ahora = (new \DateTime())->format('Y-m-d H:i:s');
    $fatiga = new Fatiga();
    $fatiga = $fatiga->NuevaFatiga($no_control, $fecha, $turno, $base, $establecido, $escolta, $tierra, $incapacitados, $francos, $comisionados, $faltas, $vacaciones, $arrestos, $permisos, $cursos, $confianza, $suspendidos, $bajas, $otros, $ahora);
    echo "Fatiga".$fatiga;
    header("Location: nueva_fatiga.php");
?>