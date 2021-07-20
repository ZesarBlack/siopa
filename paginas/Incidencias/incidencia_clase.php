<?php
    class Incidencia{
        private $no_control;
        private $dias;
        private $fecha_inicio;
        private $fecha_fin;
        private $encargado;
        private $observaciones;
        private $incidencia;
        
        public function NuevaIncidencia($no_control, $dias, $fecha_inicio, $fecha_fin, $encargado, $observaciones, $incidencia){
            include '../../requires/conexion.php';
            /*$Nombre = $conn->real_escape_string($Nombre);
            $CursoPara = $conn->real_escape_string($CursoPara);
            //$TipoCurso = $conn->real_escape_string($TipoCurso);
            $TipoCalificacion = $conn->real_escape_string($TipoCalificacion);*/

            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "INSERT INTO incidencias_admon (dias, fecha_inicio, fecha_fin, encargado, observaciones, oficio ) values ($dias,$fecha_inicio,$fecha_fin,'$encargado', '$observaciones', $incidencia)";
            if(mysqli_query($conn, $sql)){
                echo "Guardado correctamente";
            }else{
                echo "Error: ". mysqli_error($conn);
            }
            $conn->close();
        }
    }


?>