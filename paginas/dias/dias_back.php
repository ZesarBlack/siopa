<?php
/**
 *
 */
class Fechas
{
  public function sumarDiasnat($dias)
  {
    $fecha_actual = date("d-m-Y");
    echo date("d-m-Y",strtotime($fecha_actual."+ ".$dias." days"));
  }

  public function sumarDiashab($dias)
  {
  	$hoy= strtotime(date("Y-m-d"));
  	$diasemana = date('N',$hoy);
  	$totaldias = $diasemana+$dias;
  	$findesemana = intval( $totaldias/5) *2 ;
  	$diasabado = $totaldias % 5 ;
  	if ($diasabado==6){
       $findesemana++;
    }
  	if ($diasabado==0){
       $findesemana=$findesemana-2;
    }
    $total = (($dias+$findesemana) * 86400)+$hoy ;
  	echo $fechafinal = date('d-m-Y', $total);
  }

}
$fechas = new Fechas();

if (isset($_POST['dias']) && isset($_POST['tipo'])) {
  if ($_POST['tipo']=="naturales") {
    // code...
      $fechas->sumarDiasnat($_POST['dias']);
  }elseif ($_POST['tipo']=="habiles") {
    // code...
      $fechas->sumarDiashab($_POST['dias']);
  }
}



//$sumarDias=1;
//$entre1 = sumasdiasemana($sumarDias);
//echo $entre1 ;
 ?>
