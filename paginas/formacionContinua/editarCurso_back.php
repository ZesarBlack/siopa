<?php
    function editarCurso($nombre, $fecha_inicio, $fecha_fin, $horas, $lugar, $entidad, $observaciones, $filename, $idcurso){
        include '../../requires/conexion.php';
        //$conn->query("SET CHARACTER SET 'utf8'");
        echo "Inicio: ". $fecha_inicio;
        echo "Fin: ". $fecha_fin;
        $sql = "UPDATE cursos set nombre = '$nombre', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', horas=$horas, lugar = '$lugar', entidad='$entidad', observaciones='$observaciones', filename = '$filename' where idcurso = $idcurso" ;
        echo $sql;
        if(mysqli_query($conn, $sql)){
            echo "Actualizado correctamente";
        }else{
            echo "Error: ". mysqli_error($conn);
        }
        $conn->close();
    }

    if (isset($_POST['NombreCurso'])) {
        $nombre  = $_POST['NombreCurso'];
    }
    if (isset($_POST['FechaInicio'])) {
        //$fecha_inicio =  STR_TO_DATE($_POST['FechaInicio'], '%m/%d/%Y');
        $fecha_inicio = date('Y-m-d',strtotime($_POST['FechaInicio']));
        //$fecha_inicio = $_POST['FechaInicio'];
        //echo "Inicio: ".$fecha_inicio;//$fecha_inicio  = $_POST['FechaInicio'];
        //$fecha_inicio = $fecha_inicio->format('Y-m-d');
        //$fecha_inicio = \DateTime::createFromFormat('m/d/Y', $_POST['FechaInicio']);

    }
    if (isset($_POST['FechaFin'])) {
        //$fecha_fin = $_POST['FechaFin'];
        $fecha_fin = date('Y-m-d',strtotime($_POST['FechaFin']));
        //echo "Fin: ". $fecha_fin;//$fecha_fin  = $_POST['FechaF'];
        //$fecha_fin = $fecha_inicio->format('Y-m-d');
        //$fecha_fin =  STR_TO_DATE($_POST['FechaFin'], '%m/%d/%Y');
        //$fecha_fin = \DateTime::createFromFormat('m/d/Y', $_POST['FechaFin']);

    }
    if (isset($_POST['Horas'])) {
        $horas  = $_POST['Horas'];
    }
    if (isset($_POST['Creditos'])) {
        $lugar  = $_POST['Creditos'];
    }
    if (isset($_POST['Entidad'])) {
        $entidad  = $_POST['Entidad'];
    }
    if (isset($_POST['Observaciones'])) {
        $observaciones  = $_POST['Observaciones'];
    }
    if (isset($_POST['FileName'])) {
        $filename  = $_POST['FileName'];
    }
    if (isset($_POST['idCurso'])) {
        $idcurso  = $_POST['idCurso'];
    }
    editarCurso($nombre, $fecha_inicio, $fecha_fin, $horas, $lugar, $entidad, $observaciones, $filename, $idcurso);
    header("Location: cursos.php");
?>
