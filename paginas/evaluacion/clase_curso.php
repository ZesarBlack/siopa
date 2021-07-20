<?php
class curso{
    private $idCurso;
    private $no_Control;
    private $tipo;
    private $nombre;
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

    public function getTipo(){
        return $this->tipo;
    }
    public function getNombre(){
        return $this->nombre;
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

    public function getCursos(){
        //include '../../requires/conexion.php';
        $q = $conn->real_escape_string($dato);
        $conn->query("SET CHARACTER SET 'utf8'");
        $query_bienes="SELECT * FROM Cursos";
        $res_query = $conn->query($query_bienes);
        $datos=mysqli_fetch_row($res_query);
        $conn->close();
        return $datos;      
    }
    public function NuevoCurso($Nombre, $CursoPara, $TipoCurso, $TipoCalificacion){
        include '../../requires/conexion.php';
        /*$Nombre = $conn->real_escape_string($Nombre);
        $CursoPara = $conn->real_escape_string($CursoPara);
        //$TipoCurso = $conn->real_escape_string($TipoCurso);
        $TipoCalificacion = $conn->real_escape_string($TipoCalificacion);*/
        $conn->query("SET CHARACTER SET 'utf8'");
        $sql = "INSERT INTO cursos (nombre, tipo, valor, no_control) values ('$Nombre',$TipoCurso,'$TipoCalificacion','$CursoPara')";
        if(mysqli_query($conn, $sql)){
            echo "Guardado correctamente";
        }else{
            echo "Error: ". mysqli_error($conn);
        }
        $conn->close();

    }
    public function EditarCurso(){

    }
    public function isCurso($idCurso){
        include '../../requires/conexion.php';
        $conn->query("SET CHARACTER SEY utf8");
        $sql = "SELECT * from curso where idcurso = $idCurso";
        $res_query = $conn->query($sql);
        $datos=mysqli_fetch_row($res_query);
        if($datos[0] == "1"){
            echo "HOLA";
        }else{
            echo "NOOOOO";
        }
        $conn->close();
    }
        public function Leer() {
          include '../../requires/conexion.php';
          $conn->query("SET CHARACTER SET 'utf8'");
          $sql = "SELECT * FROM cursos";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
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
                <?php }
          }else{
              print( "Error");
          }
          $conn->close();
          return $result;
        }
        public function Buscar($buscar) {
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
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
    }
?>
    
