<?php
//require('conexion.php');
if (isset($_POST['id'])) {
  $id = $_POST['id'];
}

require('fpdf/fpdf.php');
require '../../requires/conexion.php';
$query_cadete = "SELECT * FROM cadete WHERE idCadete = '$id'";
$resultado = $conn->query($query_cadete);
$conn->close();

$datos= mysqli_fetch_row($resultado);

//echo $query_cadete;

class PDF extends FPDF
{

  function Header()
{
    // Logo
    $this->Image('../../logos/municipio.png',20,20,70,10);
    // Arial bold 15
    $this->SetFont('Arial','I',11);
    // Movernos a la derecha
    $this->SetY(20);
    $this->Cell(90);
    $texto=utf8_decode('Academia de Formalización y Profesionalizacion');
    $this->Cell(0,0,$texto);
    $this->SetY(25);
    $this->Cell(130);
    $this->Cell(0,0,'del Municipio de Puebla');
    $this->Ln(40);
}

  function PrintChapter()
{
    $this->AddPage();
  //  $this->ChapterBody($file);
}
}

setlocale(LC_TIME, 'es_ES');
$dia=date("d");
$mes=date("F");
$aÃ±o=date("Y");

if ($mes=="January") {
// code...
$mes="Enero";
}elseif ($mes=="February") {
// code...
$mes="Febrero";
}elseif ($mes=="March") {
// code...
$mes="Marzo";
}elseif ($mes=="April") {
// code...
$mes="Abril";
}elseif ($mes=="May") {
// code...
$mes="Mayo";
}elseif ($mes=="June") {
// code...
$mes="Junio";
}elseif ($mes=="July") {
// code...
$mes="Julio";
}elseif ($mes=="August") {
// code...
$mes="Agosto";
}elseif ($mes=="September") {
// code...
$mes="Septiembre";
}elseif ($mes=="October") {
// code...
$mes="Octubre";
}elseif ($mes=="November") {
// code...
$mes="Noviembre";
}elseif ($mes=="December") {
// code...
$mes="Diciembre";
}






$pdf = new PDF('P','mm',array(279, 216));
$pdf->SetAutoPageBreak(true,20);
$pdf->SetMargins(15.0,10.0,20.0);

$pdf->PrintChapter();
$pdf->SetFont('Arial','B',15);
// Move to 8 cm to the right
$pdf->SetY(40);
$pdf->SetX(40);
$pdf->Cell(0,0,'Ficha de entrega de documentos para aspirantes');
$pdf->SetY(40);
$pdf->SetX(100);
$pdf->SetFont('Arial','',9);
//setlocale(LC_TIME, "es_ES");
$pdf->Cell(0,15,'H. Puebla de Zaragoza, a '.$dia.' de '.strftime($mes).' del '.$aÃ±o,0,1);
$pdf->Cell(0,10,'CONVOCATORIA: '.$datos[2],0,1);
$pdf->SetY(55);
$pdf->SetX(150);
$pdf->Cell(0,10,"Folio: ".$datos[3],0,1);
$pdf->Cell(0,0,"",1,1);
$pdf->Cell(0,10,utf8_decode("Nombre Completo: ". $datos[4]." ".$datos[5]." ".$datos[6]),0,1);
$pdf->Cell(0,0,"",1,1);
$nuevafecha = date("d/m/Y", strtotime($datos[7]));
$pdf->Cell(0,10,'Fecha de Nacimiento: '.$nuevafecha,0,1);
$pdf->Cell(0,0,"",'B',0);
$pdf->SetY(80);
$pdf->SetX(88);
$pdf->Cell(0,0,'Edad: '.$datos[8],0,0);
$pdf->Cell(0,0,"",1,1);
//$pdf->SetY(80);
$pdf->SetX(130);
$pdf->Cell(0,0,'Genero: '.$datos[9],0,1);

$pdf->Cell(0,20,utf8_decode('Calle: '.$datos[20]),0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(90);
$pdf->SetX(88);
$pdf->Cell(0,0,'No exterior: '.$datos[21],0,1);
$pdf->Cell(0,2,"",'B',0);
//$pdf->SetY(100);
$pdf->SetX(130);
$pdf->Cell(0,0,'No interior: '.$datos[22],0,1);
$pdf->Cell(0,2,"",'B',0);
//$pdf->SetY(100);
$pdf->SetX(160);
$pdf->Cell(0,0,'CP: '.$datos[23],0,1);
$pdf->Cell(0,20,'Colonia: '.$datos[24],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(100);
$pdf->SetX(88);
$pdf->Cell(0,0,utf8_decode('Municipio: '.$datos[25]),0,1);
//$pdf->SetY(110);
$pdf->SetX(160);
$pdf->Cell(0,0,'Estado: '.$datos[26],'L',1);
$pdf->Cell(0,20,'Tel.Celular: '.$datos[12],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(110);
$pdf->SetX(88);
$pdf->Cell(0,0,'Tel.1: '.$datos[13],0,1);
//$pdf->SetY(120);
$pdf->SetX(135);
$pdf->Cell(0,0,'Tel.2: '.$datos[14],0,1);
$pdf->Cell(0,20,'Estado Civil: '.$datos[17],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(120);
$pdf->SetX(88);
$pdf->Cell(0,0,utf8_decode('último grado de estudios:  '.$datos[15]),0,1);
$pdf->Cell(0,20,utf8_decode('Correo Electrónico:  '.$datos[11]),0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(130);
$pdf->SetX(125);
$pdf->Cell(0,0,utf8_decode('Ex policia o Ex militar:  '.$datos[16]),0,1);
$pdf->Cell(0,20,utf8_decode('Medio por el cual se enteró del empleo:  '.$datos[18]),0,1);
if ($datos[16]=='SI') {
  $pdf->SetY(140);
  $pdf->SetX(125);
  $pdf->Cell(0,0,utf8_decode('Dependencia :  '.$datos[19]),0,1);
}else {
  $pdf->SetY(140);
  $pdf->SetX(115);

}

$pdf->SetFont('Arial','B',13);
$pdf->SetX(80);
$pdf->Cell(0,20,utf8_decode('Documentación entregada'),0,1);

$pdf->SetFont('Arial','',9);

$pdf->SetY(155);
$pdf->Cell(113,5,utf8_decode(''),1,1);

$pdf->SetY(155);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode(''),1,1);

$pdf->SetY(155);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode('Observación'),1,1);

$pdf->Cell(113,5,utf8_decode('1. Solicitud de empleo con fotografía, escrita de puño y letra'),1,1);
$pdf->SetY(160);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[27]),1,1);
$pdf->SetY(160);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[28]),1,1);

$pdf->Cell(113,5,utf8_decode('2. Copia de acta de Nacimiento de reciente expedición'),1,1);
$pdf->SetY(165);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[29]),1,1);
$pdf->SetY(165);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[30]),1,1);
$pdf->Cell(113,5,utf8_decode('3. Clave Unica Registro de Población (CURP)'),1,1);
$pdf->SetY(170);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[31]),1,1);
$pdf->SetY(170);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[32]),1,1);
$pdf->Cell(113,5,utf8_decode('4. Identificación Oficial con fotografía vigente'),1,1);
$pdf->SetY(175);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[33]),1,1);
$pdf->SetY(175);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[34]),1,1);
$pdf->Cell(113,5,utf8_decode('5. Licencia de manejo vigente (chofer o automovilista)'),1,1);
$pdf->SetY(180);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[35]),1,1);
$pdf->SetY(180);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[36]),1,1);
$pdf->Cell(113,5,utf8_decode('6. Constancia vigente de No Antecedentes Penales'),1,1);
$pdf->SetY(185);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[37]),1,1);
$pdf->SetY(185);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[38]),1,1);
$pdf->Cell(113,5,utf8_decode('7. Comprobante de estudios (Bachillerato mínimo)'),1,1);
$pdf->SetY(190);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[39]),1,1);
$pdf->SetY(190);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[40]),1,1);
$pdf->Cell(113,5,utf8_decode('8. Cartilla Liberada del SMN'),1,1);
$pdf->SetY(195);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[41]),1,1);
$pdf->SetY(195);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[42]),1,1);
$pdf->Cell(113,5,utf8_decode('9. Constancia de no estar suspendido o inhabilitado'),1,1);
$pdf->SetY(200);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[43]),1,1);
$pdf->SetY(200);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[44]),1,1);
$pdf->Cell(113,5,utf8_decode('10. Baja voluntaria de las fuerzas armadas, seguridad pública o privada'),1,1);
$pdf->SetY(205);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[45]),1,1);
$pdf->SetY(205);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[46]),1,1);
$pdf->Cell(113,5,utf8_decode('11. Comprobante de domicilio vigente'),1,1);
$pdf->SetY(210);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[47]),1,1);
$pdf->SetY(210);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[48]),1,1);
$pdf->Cell(113,5,utf8_decode('12. Tres referencias personales (no familiares)'),1,1);
$pdf->SetY(215);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[49]),1,1);
$pdf->SetY(215);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[50]),1,1);
$pdf->Cell(113,5,utf8_decode('13. Curriculum con fotografí­a vigente'),1,1);
$pdf->SetY(220);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[51]),1,1);
$pdf->SetY(220);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[52]),1,1);
$pdf->Cell(113,5,utf8_decode('14. Registro Federal de Contribuyentes (RFC)'),1,1);
$pdf->SetY(225);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[53]),1,1);
$pdf->SetY(225);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[54]),1,1);
$pdf->Cell(113,5,utf8_decode('15. Número de Seguridad Social (IMSS)'),1,1);
$pdf->SetY(230);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode($datos[55]),1,1);
$pdf->SetY(230);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($datos[56]),1,1);
//$pdf->Multicell(0,5,utf8_decode('Nota: En caso de existir un faltante en la documentaciÃ³n requerida, tendrÃ¡ que acordar un plazo por escrito para su entrega con el encargado del Ã¡rea de Reclutamiento y SelecciÃ³n.'),0,1);

$pdf->PrintChapter();
$pdf->SetFont('Arial','',9);
$pdf->SetY(30);
$pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará¡
distinción, exclusión o restricción con base en el origen étnico, condición económica o social, religión, opiniones,
género y/o estado civil. El aspirante declara que la documentación que entregó es la que se relaciona con el
presente formato y guarda en su poder los originales.

AVISO DE PRIVACIDAD Y MANEJO DE DATOS PERSONALES

La Academia de Formación y Profesionalización Policial del Municipio de Puebla, a través del área de Reclutamiento
y Selección, con domicilio en Av. Gasoducto s/n Col. Bosques de San Sebastián, Puebla, Puebla. Es responsable
del tratamiento de sus datos personales y el resguardo de las fotocopias de la documentación que entrega para
iniciar el proceso de selección.

Los datos que le solicitamos serán utilizados para el registro de aspirantes en la base de datos, programación para
realizar: la evaluación del Control de Confianza, la solicitud de los resultados, el ingreso a la Academia de los
aspirantes que aprueben, para la elaboración de informes y estadísticas. Para mayor información sobre este aviso
puede solicitarla al Tel. de atención 2 1854 88 / 2 18 54 89.'),0,1);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,2,utf8_decode('                ___________________________                                            ___________________________'),0,1);
$pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará¡
distinción, exclusiÃ³n o restricción con base en el origen étnico, condición económica o social, religión, opiniones,
género y/o estado civil. El aspirante declara que la documentación que entrega es la que se relaciona con el
presente formato y guarda en su poder los originales.

AVISO DE PRIVACIDAD Y MANEJO DE DATOS PERSONALES

La Academia de Formación y Profesionalización Policial del Municipio de Puebla, a través del área de Reclutamiento
y Selección, con domicilio en Av. Gasoducto s/n Col. Bosques de San Sebastián, Puebla, Puebla. Es responsable
del tratamiento de sus datos personales y el resguardo de las fotocopias de la documentación que entrega para
iniciar el proceso de selección.

Los datos que le solicitamos serán utilizados para el registro de aspirantes en la base de datos, programación para
realizar: la evaluación del Control de Confianza, la solicitud de los resultados, el ingreso a la Academia de los
aspirantes que aprueben, para la elaboración de informes y estadísticas. Para mayor información sobre este aviso
puede solicitarla al Tel. de atención 2 1854 88 / 2 18 54 89.'),0,1);
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(0,2,utf8_decode('                ___________________________                                            ___________________________'),0,1);
$pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);
$pdf->Close();
$filename="test.pdf";
$pdf->Output("FichaDeRegistro.pdf","D");
//$pdf->Close();
?>
