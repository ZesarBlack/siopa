<?php
    class Historial{
        private $idfatiga;
        private $fecha;
        private $idturno;
        private $base;
        private $servEstablecido;
        private $escolta;
        private $tierra;
        private $incapacitados;
        private $francos;
        private $comisionados;
        private $faltas;
        private $vacaciones;
        private $arrestados;
        private $permisos;
        private $cursos;
        private $ctrlConfianza;
        private $suspendidos;
        private $bajas;
        private $otros;
        private $iddepartamento;
        private $idUsuario;
        private $persona_idpersona;
    
        
            public function getIdfatiga(){
                return $this->idfatiga;
            }
            public function getFecha(){
                return $this->fecha;
            }
             public function getIdturno(){
                return $this->idturno;
            }
            public function getBase(){
                return $this->base;
            }
            public function getServEstablecido(){
                return $this->servEstablecido;
            }
             public function getEscolta(){
                return $this->escolta;
            }
             public function getTierra(){
                return $this->tierra;
            }
             public function getIncapacitados(){
                return $this->incapacitados;
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
                       
                        <td><?php echo $row["fecha"] ?></td>
                        <td><?php echo $row["idturno"] ?></td>
                        <td><?php echo $row["base"] ?></td>
                        <td><?php echo $row["escolta"] ?></td>
                        <td><?php echo $row["tierra"] ?></td>
                        <td><?php echo $row["francos"] ?></td>
                        <td><?php echo $row["comisionados"] ?></td>
                        <td><?php echo $row["cursos"] ?></td>
                        <td><?php echo $row["ctrlConfianza"] ?></td>
                        <td><?php echo $row["suspendidos"] ?></td>
                        <td><?php echo $row["bajas"] ?></td>
 

                    </tr>
                <?php 
              }
          }
          else{
              print( "No existe información");
          }
          $conn->close();
          return $result;
        }


       
    }


?>