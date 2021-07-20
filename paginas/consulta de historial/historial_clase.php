<?php
    class Historial{
        private $persona_idpersona;
        private $iddepartamento;
        private $fecha;
        private $arrestados;
        private $faltas;
        private $permisos;
    
        
            public function getId_persona(){
                return $this->persona_idpersona;
            }
            public function getDepartamento(){
                return $this->iddepartamento;
            }
             public function getFecha(){
                return $this->fecha;
            }
            public function getArrestados(){
                return $this->arrestados;
            }
            public function getFaltas(){
                return $this->faltas;
            }
             public function getPermisos(){
                return $this->permisos;
            }
           
                 
    
       
        
         public function getHistorial(){
        //include '../../requires/conexion.php';
        $q = $conn->real_escape_string($dato);
        $conn->query("SET CHARACTER SET 'utf8'");
        $query_bienes="SELECT * FROM fatigas";
        $res_query = $conn->query($query_bienes);
        $datos=mysqli_fetch_row($res_query);
        $conn->close();
        return $datos;      
    }

        public function Leer() {
          include '../../requires/conexion.php';
          $conn->query("SET CHARACTER SET 'utf8'");
          $sql = "SELECT * FROM fatigas";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                ?>
                    <tr>
                        <td><?php echo $row["persona_idpersona"] ?></td>
                        <td><?php echo $row["iddepartamento"] ?></td>
                        <td><?php echo $row["fecha"] ?></td>
                        <td><?php echo $row["arrestados"] ?></td>
                        <td><?php echo $row["faltas"] ?></td>
                        <td><?php echo $row["permisos"] ?></td>
                
                        
                        
                    </tr>
                <?php }
          }else{
              print( "No existe información");
          }
          $conn->close();
          return $result;
        }
        public function Buscar($buscar) {
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "SELECT * FROM fatigas where persona_idpersona LIKE '%$buscar%'";   
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                return $result;
            }else{
                print( "No existe información");
            }
            $conn->close();
            return $result;
        }

    }


?>