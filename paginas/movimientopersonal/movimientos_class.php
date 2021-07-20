<?php
    class Movimiento{
        function obtenerMovimiento($id){
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql="SELECT * FROM movimientos WHERE no_control ='$id'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                return $result;
            }else{
                print( "Error");
            }
            $conn->close();
            return $result;
        }
        function updateMovimiento($no_control, $direccionActual, $departamentoAnterior, $departamentoActual, $actividadAnterior, $actividadActual, $funcionAnterior, $funcionActual,
            $horarioAnterior, $horarioActual, $sueldoAnterior, $sueldoActual, $apartirde, $con_documentos, $observaciones, $ahora){
                include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "UPDATE movimientos set $direccion_actual=$direccionActual, iddepartamento = $departamentoActual, funcion= '$funcionActual', puesto='$actividadActual', sueldo='$sueldoActual', apartir = '$apartirde', con_documento=$con_documentos, horario= '$horarioActual', time_stamp='$ahora', iddepartamento_ant=$departamentoAnterior, funcion_ant='$funcionAnterior',sueldo_ant='$sueldoAnterior', horario_ant='$horarioAnterior'  where no_control = $no_control" ;
            if(mysqli_query($conn, $sql)){
                echo "Actualizado correctamente";
            }else{
                echo "Error: ". mysqli_error($conn);
            }
            $conn->close();
        }
    }
?>