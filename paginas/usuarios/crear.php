  <?php
  /**
   *
   */
  class usuario
  {
    public function borrarUsr($idUsuario)
    {
      include '../../requires/conexion.php';
      //$idUsuario=$_GET['idUsuario'];
      $consulta=mysqli_query($conn,"DELETE FROM usuarios_cat WHERE idUsuario='$idUsuario'");
      header('location: adminusuarios.php');
    }
    public function crear_usr($nombre, $paterto, $materno, $usuario, $contraeña, $mail, $fecha, $registro)
    {
      //echo $nombre;
      include '../../requires/conexion.php';
      $consulta= "INSERT INTO usuarios_cat(nombre, ap_paterno, ap_materno, usr, pass, email, roles_idrol, create_time)
                              VALUES ('$nombre', '$paterto', '$materno', '$usuario', '$contraeña', '$mail', '$registro', '$fecha')";
      echo "<br>".$consulta;
      $resultado= mysqli_query($conn, $consulta);
      mysqli_close($conn);
      //header("Location:adminusuarios.php");
    }
    public function pass_hash($contraseña)
    {
      $key = md5($contraseña."usrHSCSPCP");//se crea la llave con la contraseña
      $pass=crypt($contraseña,$key);//crea un contradeña usando el dato del usuario y la llave
      return $pass;
    }

  }

  $usuario = new usuario();
  if (isset($_POST['contras'])) {
      $password=$usuario->pass_hash($_POST['contras']);
      $usuario->crear_usr($_POST['nombre'], $_POST['paterno'], $_POST['materno'], $_POST['usuario'], $password, $_POST['correo'], $_POST['fecha'], $_POST['registro'] );
      header("Location:adminusuarios.php");
  }

  if (isset($_GET['idUsuario'])) {
    $usuario->borrarUsr($_GET['idUsuario']);
  }
  //echo $password;


  ?>
