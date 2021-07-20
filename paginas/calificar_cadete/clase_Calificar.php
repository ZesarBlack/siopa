<?php
    class Calificar{
        function darBaja($idAlumno, $idCurso){
            include '../../requires/conexion.php';
            $query = "DELETE from cadete_tiene_cursos where cadete_idCadete = '$idAlumno' and cursos_idcurso='$idCurso'";
            if ($conn->query($query) === TRUE) {
                echo "Record deleted successfully";
              } else {
                echo "Error deleting record: " . $conn->error;
              }

              $conn->close();
              header('Location: asignar.php?curso='.$idCurso);
        }
    }

?>
