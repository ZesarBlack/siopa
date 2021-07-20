<?php
    if (isset($_POST['consulta'])) {
        $t_usr  = $_POST['consulta'];
    }else{
        $t_usr = "";
    }
    include 'clase_curso.php';
    $leer = new Curso();
    $datos2 = $leer -> Buscar($t_usr);
    while($row = $datos2->fetch_array(MYSQLI_ASSOC)){
        echo $row['nombre'];
//---------------------------------------------------comienza ciclo while
?>
    <tr>
        <td><?php echo $row["nombre"] ?></td>
        <td><?php echo $row["fecha_inicio"] ?></td>
        <td><?php echo $row["fecha_fin"] ?></td>
        <td><?php echo $row["horas"] ?></td>
        <td><?php echo $row["valor"] ?></td>
        <td><?php echo $row["entidad"] ?></td>
        <td><?php echo $row["lugar"] ?></td>
        <td><?php echo $row["observaciones"] ?></td>
        <td><?php echo $row["filename"] ?></td>
    </tr>
<?php
//---------------------------------------------------termina ciclo while
};
?>
