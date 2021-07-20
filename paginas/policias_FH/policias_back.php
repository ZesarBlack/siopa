
<?php
/**
 *
 */

class policia
{


public function obtenerPolicia($numero){

  $arrContextOptions=array(
      "ssl"=>array(
          'method'=>"GET",
          "verify_peer"=>false,
          "verify_peer_name"=>false,
      ),
  );

  $response = file_get_contents("http://172.18.0.28/swebAcademia/?user=cesar&pass=c3s4RM494p&control=".$numero, true, stream_context_create($arrContextOptions));
  $policia = json_decode($response);
  //obtiene todo el arreglo de datos
  //var_dump($policia);
  //imprimes el nombre de la posicion 0 del arreglo
  if (isset($policia)) {
    return 1;
  }else {
    echo "no tiene cosas";
  }
  return $policia;
}

}



/*
$policia=json_decode($response, true);
  echo "<br>";
echo $policia["0"]["policia"]["id"];
  echo "<br>";
echo $policia["0"]["policia"]["nombre"];
  echo "<br>";
echo $policia["0"]["policia"]["nacimiento"];
  echo "<br>";
echo $policia["0"]["policia"]["entidad"];
  echo "<br>";
echo $policia["0"]["policia"]["municipio"];
  echo "<br>";
echo $policia["0"]["policia"]["no_control"];
  echo "<br>";
echo $policia["0"]["policia"]["tipo_empleado"];
  echo "<br>";
echo $policia["0"]["policia"]["no_placa"];
  echo "<br>";
echo $policia["0"]["policia"]["Tipo_Servicio"];
  echo "<br>";
echo $policia["0"]["policia"]["No_sm"];
  echo "<br>";
echo $policia["0"]["policia"]["no_cartilla"];
  echo "<br>";
echo $policia["0"]["policia"]["rfc"];
  echo "<br>";
echo $policia["0"]["policia"]["curp"];
  echo "<br>";
echo $policia["0"]["policia"]["sector"];
  echo "<br>";
echo $policia["0"]["policia"]["compania"];
  echo "<br>";
echo $policia["0"]["policia"]["expedicion_licencia"];
  echo "<br>";
echo $policia["0"]["policia"]["vencimiento_licencia"];

*/
/*
  $age = array(
   "policia"=>array("nombre" => "beto" )
);

  $nuevo = json_encode($age);
  //$nuevo = json_encode($age);
    echo "<br>";
   var_dump(json_decode($nuevo,true));
  $nuevo2 = json_decode($nuevo,true);
  echo "<br>";
  echo $nuevo2["policia"]["nombre"];
*/
?>
