<?php
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
error_reporting(0);
include 'servicio.php';
$s = new Servicio();
$conn=conexDB();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
  {
      $user =$_GET['user'];
      $pass = $_GET['pass'];
      $id = $_GET['id'];
      $curp = $_GET['curp'];
      $nombre= $_GET['nombre'];

      if (preg_match('/[^A-Za-z0-9$]/', $user)==1 || preg_match('/[^A-Za-z0-9$]/', $pass)==1 || preg_match('/[^0-9$]/', $id)==1|| preg_match('/[^A-Za-z0-9$]/', $curp)==1)
      {

       $mov= "Datos incorrectos en busqueda";
       $mysql="INSERT INTO ingresos (idm,usuario,contrasena,mov)VALUES (2,'$user','$pass','$mov')";
       $reg=$conn->query($mysql);
       return "Error caracter no valido";
       }else{

            if (isset($user)&&isset($pass)&&isset($id))
            {
            $nombre= $_GET['user'];
            $pass = md5($_GET['pass']);
            $nombrefind = nombreDB($nombre,$pass);  
            if ($nombrefind == 1) {
              //Si busca
                $fecha = date('Y-m-d H:i:s');
                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                    $hosts = gethostbynamel($hostname);
                        if (is_array($hosts)) {
                            foreach ($hosts as $ip) {
                                    $ip;
                            }
                        } else {
                        $ip="No se encontró IP";
                        }
                $mov_EFE= "Busqueda Correcta por ID-- :".$id;
                $mysql_EFE="INSERT INTO ingresos (idm,usuario,contrasena,mov,fecha,ip) VALUES (1,'$user','$pass','$mov_EFE','$fecha','$ip')";
                $reg1=$conn->query($mysql_EFE);
                $gs=$s->GetSingle($id);
                echo $gs;
                exit();
            }else{
                echo "No esta Autorizado!";
                }
          }

          if (isset($user)&&isset($pass)&&empty($curp)&&empty($nombre))
          {
            $nombre= $_GET['user'];
            $pass = md5($_GET['pass']);
            $nombrefind = nombreDB($nombre,$pass);
            if ($nombrefind == 1) {
              $fecha = date('Y-m-d H:i:s');
                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                    $hosts = gethostbynamel($hostname);
                        if (is_array($hosts)) {
                            foreach ($hosts as $ip) {
                                    $ip;
                            }
                        } else {
                        $ip="No se encontró IP";
                        }
              $mov_EFE= "Busqueda Correcta";
              $mysql_EFE="INSERT INTO ingresos (idm,usuario,contrasena,mov,fecha,ip) VALUES (1,'$user','$pass','$mov_EFE','$fecha','$ip')";
                $reg1=$conn->query($mysql_EFE);
                $ser=$s->GET();
                echo $ser;
                exit();
              }else{
                echo "No esta Autorizado!";
                }
          }

            
          if (isset($user)&&isset($pass)&&isset($curp))
          {
            $nombre= $_GET['user'];
            $pass = md5($_GET['pass']);
            $nombrefind = nombreDB($nombre,$pass);
            if ($nombrefind == 1) {
              $fecha = date('Y-m-d H:i:s');
                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                    $hosts = gethostbynamel($hostname);
                        if (is_array($hosts)) {
                            foreach ($hosts as $ip) {
                                    $ip;
                            }
                        } else {
                        $ip="No se encontró IP";
                        }
              $mov_EFE= "Busqueda Correcta por CURP: ".$curp;
              $mysql_EFE="INSERT INTO ingresos (idm,usuario,contrasena,mov,fecha,ip) VALUES (1,'$user','$pass','$mov_EFE','$fecha','$ip')";
                $reg1=$conn->query($mysql_EFE);
                $serc=$s->GetCurp($curp);
                echo $serc;
                exit();
              }else{
                echo "No esta Autorizado!";
                }
          }

          if (isset($user)&&isset($pass)&&isset($nombre))
          {
            $nombreTr= $_GET['user'];
            $pass = md5($_GET['pass']);
            $nombrefind = nombreDB($nombreTr,$pass);
            if ($nombrefind == 1) {
              $fecha = date('Y-m-d H:i:s');
              $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                  $hosts = gethostbynamel($hostname);
                      if (is_array($hosts)) {
                          foreach ($hosts as $ip) {
                                  $ip;
                          }
                      } else {
                      $ip="No se encontró IP";
                      }
              $mov_EFE= "Busqueda Correcta por Nombre: ".$nombre;
              $mysql_EFE="INSERT INTO ingresos (idm,usuario,contrasena,mov,fecha,ip) VALUES (1,'$user','$pass','$mov_EFE','$fecha','$ip')";
                $reg1=$conn->query($mysql_EFE);
                $serc=$s->GetNombre($nombre);
                echo $serc;
                exit();
              }else{
                echo "No esta Autorizado!";
                }
          }
       }   
  }
  //En caso de que ninguna de las opciones anteriores se haya ejecutado
  header("HTTP/1.1 400 Bad Request");
?>