<?php 
    function conectarDB(){
        $user = 'sa';
        $pass = '@0X$4Z8%6I2E';
        $server = '172.18.0.29';
        $database = 'SIIA-FORTAMUN';
        $connection_string = "DRIVER={ODBC Driver 17 for SQL Server};SERVER=$server;DATABASE=$database";
        $conn = odbc_connect($connection_string,$user,$pass);
        return $conn;
      }

      function nombreDB($user,$pass){
        $usuario = "root";
        $password = "Xit.060";
        $servidor = "172.18.0.28";
        $basededatos = "servicio_web_Academia";
        $conex = mysqli_connect( $servidor, $usuario, $password, $basededatos ) or die("Ha sucedido un error inesperado en la conexion de la base de datos");
        $passM =MD5($pass);
        $nombre= "SELECT * FROM usuarios WHERE usuario = '$user' ";
        $resultado = mysqli_query($conex, $nombre);
        $count = mysqli_num_rows($resultado);
        if($count == 1){
            $row = mysqli_fetch_assoc($resultado);
            $password= $row['contrasena'];
            if($pass == $password){
              return 1;
            }else{
              return 0;
            }  
        }
      }

      function conexDB(){
        $usuario = "root";
        $password = "Xit.060";
        $servidor = "172.18.0.28";
        $basededatos = "servicio_web_Academia";
        $conex = mysqli_connect( $servidor, $usuario, $password, $basededatos ) or die("Ha sucedido un error inesperado en la conexion de la base de datos");
        return $conex;
        
      }

      function getRealIP()
      {
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                    $hosts = gethostbynamel($hostname);
                    echo "<br>";
                        if (is_array($hosts)) {
                            foreach ($hosts as $ip) {
                                    $ip;
                            }
                        } else {
                        $ip="No se encontró IP";
                        }
      }
      

?>