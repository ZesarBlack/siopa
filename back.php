<?php
/**
 *
 */
class Cliente
{
  public function verUsr($nombre)
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $response = file_get_contents("https://172.18.0.28/academia/paginas/reporte_corte/control_conf_back.php?obtener=".$nombre, true, stream_context_create($arrContextOptions));
    echo '
    <table>
      <tbody>
      '.
      $response
      .'
      </tbody>
    </table>
    ';
  }
}

$cliente = new Cliente();

$cliente->verUsr($_POST['nombre']);
?>
