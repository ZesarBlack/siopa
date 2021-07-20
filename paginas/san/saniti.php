
<?php
/*
$nombre = $_GET['nombre'];

class Sanitizar
{
  function verificarCaracteres($nombre_usuario){
     if (preg_match('/[!#$"%&()<>]/', $nombre_usuario)) {
        echo "El nombre de usuario $nombre_usuario no es valido<br>";
        return true;
     } else {
         echo "El nombre de usuario $nombre_usuario es válido<br>";
        return false;
     }
  }
}

$san = new Sanitizar();

$san->verificarCaracteres($nombre);
*/
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="text" name="prueba" id="prueba" value="" onkeyup="sanitizar(this)" style="">
  </body>
</html>
<script type="text/javascript" src="expresione.js">
</script>
