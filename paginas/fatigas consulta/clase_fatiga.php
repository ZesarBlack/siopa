<?php
    class Fatiga{
        public function NuevaFatiga($no_control,$fecha, $turno, $base, $establecido, $escolta, $tierra, $incapacitados, $francos, $comisionados, $faltas, $vacaciones, $arrestos, $permisos, $cursos, $confianza, $suspendidos, $bajas, $otros, $ahora){
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "INSERT INTO fatigas ( no_control, 
                fecha, idturno, base, servEstablecido, escolta, tierra, incapacitados, 
                francos, comisionados, faltas, vacaciones, arrestados, permisos, 
                cursos, ctrlConfianza, suspendidos, bajas, otros, iddepartamento, time_stamp) 
                values ($no_control, '$fecha', $turno, $base, $establecido, $escolta, $tierra, $incapacitados, $francos, $comisionados, $faltas, $vacaciones, $arrestos, $permisos, $cursos, $confianza, $suspendidos, $bajas, $otros,101, '$ahora')";
            if(mysqli_query($conn, $sql)){
                echo "Guardado correctamente";
            }else{
                echo "Error: ". mysqli_error($conn);
            }
            $conn->close();
        }

        public function Buscar($no_control){
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf-8");
            $sql = "SELECT * from fatigas where no_control=$no_control";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                return $result;
            }else{
                print( "Error");
            }
            $conn->close();
            return $result;
        }
    }
?>