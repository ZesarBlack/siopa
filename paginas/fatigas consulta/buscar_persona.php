<?php 
    if (isset($_POST['consulta'])) {
        $t_usr  = $_POST['consulta'];
    }else{
        $t_usr = "";
    }
    include 'clase_fatiga.php';
    $leer = new Fatiga();
    $datos2 = $leer -> Buscar($t_usr);
    while($row = $datos2->fetch_array(MYSQLI_ASSOC)){
        //echo $row['nombre'];
    
?>    
    <tr>
        <td scope="col"><?php echo $row["fecha"] ?></td>
        <td scope="col"><?php echo $row["idturno"] ?></td>
        <td scope="col"><?php echo $row["base"] ?></td>
        <td scope="col"><?php echo $row["escolta"] ?></td>
        <td scope="col"><?php echo $row["tierra"] ?></td>
        <td scope="col"><?php echo $row["francos"] ?></td>
        <td scope="col"><?php echo $row["comisionados"] ?></td>
        <td scope="col"><?php echo $row["cursos"] ?></td>
        <td scope="col"><?php echo $row["ctrlConfianza"] ?></td>
        <td scope="col"><?php echo $row["suspendidos"] ?></td>
        <td scope="col"><?php echo $row["bajas"] ?></td>
    </tr>
<?php
};
?>