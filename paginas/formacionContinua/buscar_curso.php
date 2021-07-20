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

?>
<tr>
    <td><?php echo $row["nombre"] ?></td>
    <td><?php echo $row["no_control"] ?></td>
    <td><?php
        if($row["tipo"] == 0){
            echo "Obligatorio";
        }else{
            echo "No Obligatorio";
        }
    ?></td>
    <td><?php echo $row["valor"] ?></td>
    <td><?php echo $row["estado"] ?></td>
    <td><?php echo "<a class='btn btn-primary' href='editarCurso.php?curso=".$row["idcurso"]."'>Editar</a>"?></td>
    <td><?php echo "<a class='btn btn-danger' href='finalizarCurso_back.php?curso=".$row["idcurso"]."'>Finalizar Curso</a>"?></td>
</tr>
<?php
};
?>
