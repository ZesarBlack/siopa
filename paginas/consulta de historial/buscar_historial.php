<?php 
    if (isset($_POST['consulta'])) {
        $t_usr  = $_POST['consulta'];
    }else{
        $t_usr = "";
    }
    include 'historial_clase.php';
    $leer = new Historial();
    $datos2 = $leer -> Buscar($t_usr);
    while($row = $datos2->fetch_array(MYSQLI_ASSOC)){
        echo $row['persona_idpersona'];
    
?>
    <tr>
        <td><?php echo $row["persona_idpersona"] ?></td>
        <td><?php echo $row["iddepartamento"] ?></td>
        <td><?php echo $row["fecha"] ?></td>
        <td><?php echo $row["arrestados"] ?></td>
        <td><?php echo $row["faltas"] ?></td>
        <td><?php echo $row["permisos"] ?></td>
        
        
    </tr>
   
<?php
};
?>