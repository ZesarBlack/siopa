<?php
//require('conexion.php');
require('fpdf/fpdf.php');


class PDF extends FPDF
{
      protected $B = 0;
      protected $I = 0;
      protected $U = 0;
      protected $HREF = '';

      function WriteHTML($html)
      {
          // HTML parser
          $html = str_replace("\n",' ',$html);
          $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
          foreach($a as $i=>$e)
          {
              if($i%2==0)
              {
                  // Text
                  if($this->HREF)
                      $this->PutLink($this->HREF,$e);
                  else
                      $this->Write(5,$e);
              }
              else
              {
                  // Tag
                  if($e[0]=='/')
                      $this->CloseTag(strtoupper(substr($e,1)));
                  else
                  {
                      // Extract attributes
                      $a2 = explode(' ',$e);
                      $tag = strtoupper(array_shift($a2));
                      $attr = array();
                      foreach($a2 as $v)
                      {
                          if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                              $attr[strtoupper($a3[1])] = $a3[2];
                      }
                      $this->OpenTag($tag,$attr);
                  }
              }
          }
      }
      function OpenTag($tag, $attr)
      {
          // Opening tag
          if($tag=='B' || $tag=='I' || $tag=='U')
              $this->SetStyle($tag,true);
          if($tag=='A')
              $this->HREF = $attr['HREF'];
          if($tag=='BR')
              $this->Ln(5);
      }

      function CloseTag($tag)
      {
          // Closing tag
          if($tag=='B' || $tag=='I' || $tag=='U')
              $this->SetStyle($tag,false);
          if($tag=='A')
              $this->HREF = '';
      }

      function SetStyle($tag, $enable)
      {
          // Modify style and select corresponding font
          $this->$tag += ($enable ? 1 : -1);
          $style = '';
          foreach(array('B', 'I', 'U') as $s)
          {
              if($this->$s>0)
                  $style .= $s;
          }
          $this->SetFont('',$style);
      }

      function PutLink($URL, $txt)
      {
          // Put a hyperlink
          $this->SetTextColor(0,0,255);
          $this->SetStyle('U',true);
          $this->Write(5,$txt,$URL);
          $this->SetStyle('U',false);
          $this->SetTextColor(0);
      }
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
$dia=date("d");
setlocale(LC_TIME, "spanish");
$mes=date("F");
$año=date("Y");

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
  $mes="Septiembre"
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


$dia=date("d");
setlocale(LC_TIME, "spanish");
$mes=date("F");
$año=date("Y");
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
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,15,'H. Puebla de Zaragoza, a '.$dia.' de '.strftime("%B").' del '.$año,0,1);
$pdf->Cell(0,10,'CONVOCATORIA:',0,1);
$pdf->SetY(55);
$pdf->SetX(160);
$pdf->Cell(0,10,'Folio:',0,1);
$pdf->Cell(0,10,'Nombre Completo:',0,1);
$pdf->Cell(0,10,'Fecha de Nacimiento:',0,1);
$pdf->SetY(80);
$pdf->SetX(90);
$pdf->Cell(0,0,'Edad:',0,1);
//$pdf->SetY(80);
$pdf->SetX(160);
$pdf->Cell(0,0,'Genero:',0,1);
$pdf->Cell(0,20,utf8_decode('Dirección:'),0,1);
$pdf->SetY(90);
$pdf->SetX(100);
$pdf->Cell(0,0,'No exterior:',0,1);
//$pdf->SetY(100);
$pdf->SetX(130);
$pdf->Cell(0,0,'No interior:',0,1);
//$pdf->SetY(100);
$pdf->SetX(160);
$pdf->Cell(0,0,'CP:',0,1);
$pdf->Cell(0,20,'Colonia:',0,1);
$pdf->SetY(100);
$pdf->SetX(90);
$pdf->Cell(0,0,'Municipio:',0,1);
//$pdf->SetY(110);
$pdf->SetX(160);
$pdf->Cell(0,0,'Estado:',0,1);
$pdf->Cell(0,20,'Tel. Celular:',0,1);
$pdf->SetY(110);
$pdf->SetX(90);
$pdf->Cell(0,0,'Tel. 1:',0,1);
//$pdf->SetY(120);
$pdf->SetX(150);
$pdf->Cell(0,0,'Tel. 2:',0,1);
$pdf->Cell(0,20,'Estado Civil:',0,1);
$pdf->SetY(120);
$pdf->SetX(100);
$pdf->Cell(0,0,utf8_decode('Último grado de estudios:'),0,1);
$pdf->Cell(0,20,utf8_decode('Correo Electrónico:'),0,1);
$pdf->SetY(130);
$pdf->SetX(100);
$pdf->Cell(0,0,'Ex policia o Ex militar:',0,1);
$pdf->Cell(0,20,utf8_decode('Medio por el cual se enteró del empleo:'),0,1);
$pdf->SetY(140);
$pdf->SetX(115);
$pdf->Cell(0,0,utf8_decode('Dependencia a la que pertenecía:'),0,1);
$pdf->SetFont('Arial','B',13);
$pdf->SetX(80);
$pdf->Cell(0,20,utf8_decode('Documentacion entregada'),0,1);

$pdf->SetFont('Arial','',10);

$pdf->SetY(155);
$pdf->Cell(113,5,utf8_decode(''),1,1);
$pdf->SetY(155);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(155);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode('Observacíon'),1,1);


$pdf->Cell(113,5,utf8_decode('1. Solicitud de empleo con fotografía, escrita de puño y letra'),1,1);
$pdf->SetY(160);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(160);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);

$pdf->Cell(113,5,utf8_decode('2. Copia de acta de Nacimiento de reciente expedición'),1,1);
$pdf->SetY(165);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(165);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('3. Clave Unica Registro de Población (CURP)'),1,1);
$pdf->SetY(170);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(170);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('4. Identificación Oficial con fotografía vigente'),1,1);
$pdf->SetY(175);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(175);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('5. Licencia de manejo vigente (chofer o automovilista)'),1,1);
$pdf->SetY(180);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(180);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('6. Constancia vigente de No Antecedentes Penales'),1,1);
$pdf->SetY(185);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(185);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('7. Comprobante de estudios (mínimo Bachillerato)'),1,1);
$pdf->SetY(190);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(190);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('8. Cartilla Liberada del SMN'),1,1);
$pdf->SetY(195);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(195);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('9. Constancia de no estar suspendido o inhabilitado'),1,1);
$pdf->SetY(200);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(200);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('10. Baja voluntaria de las fuerzas armadas, seguridad pública o privada'),1,1);
$pdf->SetY(205);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(205);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('11. Comprobante de domicilio vigente'),1,1);
$pdf->SetY(210);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(210);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('12. Tres referencias personales (no familiares)'),1,1);
$pdf->SetY(215);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(215);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('13. Curriculum con fotografía vigente'),1,1);
$pdf->SetY(220);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(220);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('14. Registro Federal de Contribuyentes (RFC)'),1,1);
$pdf->SetY(225);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(225);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Cell(113,5,utf8_decode('15. Número de Seguridad Social (IMSS)'),1,1);
$pdf->SetY(230);
$pdf->SetX(128);
$pdf->Cell(5,5,utf8_decode(''),1,1);
$pdf->SetY(230);
$pdf->SetX(133);
$pdf->Cell(50,5,utf8_decode(''),1,1);
$pdf->Multicell(0,5,utf8_decode('Nota: En caso de existir un faltante en la documentación requerida, tendrá que acordar un plazo por escrito para su entrega con el encargado del área de Reclutamiento y Selección.'),0,1);




$pdf->PrintChapter();
$pdf->SetFont('Arial','',9);
$pdf->SetY(30);
$pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará
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
$pdf->Cell(0,0,utf8_decode('                ___________________________                                            ___________________________'),0,1);
$pdf->Ln();
$pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará
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
$pdf->Cell(0,0,utf8_decode('                ___________________________                                            ___________________________'),0,1);
$pdf->Ln();
$pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);
$pdf->Close();
//$filename="/home/user/public_html/test.pdf";
$pdf->Output('Ficha.pdf','D');
//$pdf->Close();
?>
