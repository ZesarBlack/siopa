<?php   
    if (isset($_POST['id'])) {
        $t_usr  = $_POST['id'];
    }else{
        $t_usr = "";
    }
    include 'movimientos_class.php';
    $moviemientos = new Movimiento();
    $datos = $moviemientos->obtenerMovimiento($t_usr);    
    while($row = mysqli_fetch_array($datos)){
        $iddepartamento = $row["iddepartamento"];
        $funcion = $row["funcion"];
        $puesto = $row["puesto"];
        $sueldo = $row["sueldo"];
        $con_documento = $row["con_documento"];
        $horario = $row["horario"];
        $return_array[] =  array("iddepartamento" => $iddepartamento,
                                "funcion" => $funcion,
                                "puesto" => $puesto,
                                "sueldo" => $sueldo,
                                "con_documento" => $con_documento,
                                "horario" => $horario
                                );  
                                echo json_encode($return_array);
    }
    

?>