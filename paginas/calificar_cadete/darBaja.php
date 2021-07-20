<?php
    if (isset($_POST['idAlumno'])) {
        $idAlumno = $_POST['idAlumno'];
    }
    if (isset($_POST['idCurso'])) {
        $idCurso = $_POST['idCurso'];
    }
    if (isset($_POST['button'])) {
        $button = $_POST['button'];
    }
    //echo $idAlumno;
    //echo $idCurso;
    list($idAlumno, $idCurso) =  explode("-", $button);
    include 'clase_Calificar.php';
    $datos = new Calificar();
    $datos->darBaja($idAlumno, $idCurso);
?>