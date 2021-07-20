<?php
class Subir
{
  public function subirDocumento($temp_archivo, $nombre)
  {
    move_uploaded_file($temp_archivo,$nombre);

    echo "el archivo con nombre: ".$nombre."  se ha movido exitosamemte";
    echo "<br>";
    echo "de la dirección Inicial: ".$temp_archivo;
  }
}

$subir = new Subir();
if (isset($_FILES["file"])) {
  $subir->subirDocumento($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);
};
 ?>
