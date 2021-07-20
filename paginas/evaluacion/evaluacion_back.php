<?php
    //require_once '../../requires/conexion.php';
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
        public function NuevoCurso($Nombre, $FechaInicio, $FechaFin, $Horas, $Valor, $Lugar, $Entidad, $Observaciones, $FileName){
            include '../../requires/conexion.php';
            /*$Nombre = $conn->real_escape_string($Nombre);
            $CursoPara = $conn->real_escape_string($CursoPara);
            //$TipoCurso = $conn->real_escape_string($TipoCurso);
            $TipoCalificacion = $conn->real_escape_string($TipoCalificacion);*/
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "INSERT INTO cursos (nombre, fecha_inicio, fecha_fin, horas, valor, lugar, entidad, observaciones, fileName) values ('$Nombre', '$FechaInicio', '$FechaFin', '$Horas', '$Valor', '$Lugar', '$Entidad', '$Observaciones', '$FileName')";
            if(mysqli_query($conn, $sql)){
                echo "Guardado correctamente";
            }else{
                echo "Error: ". mysqli_error($conn);
            }
            $conn->close();

        }
        public function EditarCurso(){

        }

    }
    $guardar = new curso();
    if (isset($_POST['NombreCurso'])) {
        $Nombre  = $_POST['NombreCurso'];
    }
     if (isset($_POST['FechaInicio'])) {
        //$fecha_inicio =  STR_TO_DATE($_POST['FechaInicio'], '%m/%d/%Y');
        $FechaInicio = date('Y-m-d',strtotime($_POST['FechaInicio']));
        //$fecha_inicio = $_POST['FechaInicio'];
        //echo "Inicio: ".$fecha_inicio;//$fecha_inicio  = $_POST['FechaInicio'];
        //$fecha_inicio = $fecha_inicio->format('Y-m-d');
        //$fecha_inicio = \DateTime::createFromFormat('m/d/Y', $_POST['FechaInicio']);

    }
    if (isset($_POST['FechaFin'])) {
        //$fecha_fin = $_POST['FechaFin'];
        $FechaFin = date('Y-m-d',strtotime($_POST['FechaFin']));
        //echo "Fin: ". $fecha_fin;//$fecha_fin  = $_POST['FechaF'];
        //$fecha_fin = $fecha_inicio->format('Y-m-d');
        //$fecha_fin =  STR_TO_DATE($_POST['FechaFin'], '%m/%d/%Y');
        //$fecha_fin = \DateTime::createFromFormat('m/d/Y', $_POST['FechaFin']);

    }

    if (isset($_POST['Horas'])) {
        $Horas  = $_POST['Horas'];
    }
    if (isset($_POST['Valor'])) {
        $Valor  = $_POST['Valor'];
    }
    if (isset($_POST['Lugar'])) {
        $Lugar  = $_POST['Lugar'];
    }
    if (isset($_POST['Entidad'])) {
        $Entidad  = $_POST['Entidad'];
    }
    if (isset($_POST['Observaciones'])) {
        $Observaciones  = $_POST['Observaciones'];
    }
    if (isset($_POST['FileName'])) {
        $FileName  = $_POST['FileName'];
    }

    $guardar -> NuevoCurso($Nombre, $FechaInicio, $FechaInicio, $Horas, $Valor, $Lugar, $Entidad, $Observaciones, $FileName);


?>
