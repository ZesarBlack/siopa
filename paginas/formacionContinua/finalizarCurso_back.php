<?php require '../../requires/head2.php';

$idcurso=$_GET['curso'];
function editarCurso($idcurso){
    include '../../requires/conexion.php';
    $conn->query("SET CHARACTER SET 'utf8'");
    $sql = "UPDATE cursos set estado = 'concluído' where idcurso = $idcurso" ;
    if(mysqli_query($conn, $sql)){
        echo "Actualizado correctamente";
    }else{
        echo "Error: ". mysqli_error($conn);
    }
    $conn->close();
}
editarCurso($idcurso);
header("Location: cursos.php");
?>
