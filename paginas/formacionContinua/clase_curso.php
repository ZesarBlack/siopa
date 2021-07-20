<?php
class curso{
    private $idCurso;
    private $no_Control;
    private $tipo;
    private $nombre;
    private $generacion;
    private $grupo;
    private $periodo;
    private $valor;
    private $fecha_inicio;
    private $fecha_fin;
    private $horas;
    private $lugar;
    private $entidad;
    private $observaciones;
    private $fileName;
    private $idUsuario;
    private $time_stamp;
    private $estado;

    public function getTipo(){
        return $this->tipo;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getGeneracion(){
        return $this->generacion;
    }
    public function getGrupo(){
        return $this->grupo;
    }
    public function getPeriodo(){
        return $this->periodo;
    }
    public function getValor(){
        return $this->valor;
    }
    public function getFecha_Inicio(){
        return $this->fecha_inicio;
    }
    public function getFecha_Fin(){
        return $this->fecha_fin;
    }
    public function getHoras(){
        return $this->horas;
    }
    public function getLugar(){
        return $this->lugar;
    }
    public function getEntidad(){
        return $this->entidad;
    }
    public function getObservaciones(){
        return $this->observaciones;
    }
    public function getFileName(){
        return $this->fileName;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function getCursos(){
        //include '../../requires/conexion.php';
        $q = $conn->real_escape_string($dato);
        //$conn->query("SET CHARACTER SET 'utf8'");
        $query_bienes="SELECT * FROM Cursos";
        $res_query = $conn->query($query_bienes);
        $datos=mysqli_fetch_row($res_query);
        $conn->close();
        return $datos;
    }
    public function NuevoCurso($Nombre,$generacion, $grupo, $periodo, $CursoPara, $TipoCurso, $TipoCalificacion, $fecha_inicio, $fecha_fin, $horas, $lugar, $entidad, $observaciones, $fileName){
        include '../../requires/conexion.php';
        /*$Nombre = $conn->real_escape_string($Nombre);
        $CursoPara = $conn->real_escape_string($CursoPara);
        //$TipoCurso = $conn->real_escape_string($TipoCurso);
        $TipoCalificacion = $conn->real_escape_string($TipoCalificacion);*/
        //$conn->query("SET CHARACTER SET 'utf8'");
        $sql = "INSERT INTO cursos (nombre, generacion, grupo, periodo, tipo, valor, no_control, fecha_inicio, fecha_fin, horas, lugar, entidad, observaciones, estado) values
        ('$Nombre','$generacion', '$grupo', '$periodo', '$TipoCurso', '$TipoCalificacion', '$CursoPara', '$fecha_inicio', '$fecha_fin', '$horas', '$lugar', '$entidad', '$observaciones' ,'en curso')";
        if(mysqli_query($conn, $sql)){
          echo $sql;
          //header("Location: cursos.php");
            //echo "Guardado correctamente";
        }else{
          echo $sql;
            echo "Error: ". mysqli_error($conn);
        }
        $conn->close();

    }
    public function EditarCurso(){

    }
    public function isCurso($idCurso){
        include '../../requires/conexion.php';
        //$conn->query("SET CHARACTER SEY utf8");
        $sql = "SELECT * from curso where idcurso = $idCurso";
        $res_query = $conn->query($sql);
        $datos=mysqli_fetch_row($res_query);
        if($datos[0] == "1"){
            //echo "HOLA";
        }else{
            //echo "NOO";
        }
        $conn->close();
    }
        public function Leer() {
          include '../../requires/conexion.php';
          //$conn->query("SET CHARACTER SET 'utf8'");
          $sql = "SELECT * FROM cursos LIMIT 10";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
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
                <?php }
          }else{
              print( "Error");
          }
          $conn->close();
          return $result;
        }
        public function Buscar($buscar) {
            include '../../requires/conexion.php';
            //$conn->query("SET CHARACTER SET 'utf8'");
            $sql = "SELECT * FROM cursos where nombre LIKE '%$buscar%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                return $result;
            }else{
                print( "Error");
            }
            $conn->close();
            return $result;
        }

        public function obtnerCurso($id_curso)
        {
          include '../../requires/conexion.php';
          $query_curso="SELECT * FROM cursos WHERE idcurso = '$id_curso' ";
          $resultado_cursos= $conn->query($query_curso);
          $curso=mysqli_fetch_row($resultado_cursos);
          return $curso;
        }
    }
?>
