<?php
require('conexion.php');
require('fpdf/fpdf.php');
// Create the keypair
//$res=openssl_pkey_new();
// Get private key
//openssl_pkey_export($res, $privatekey);
// Get public key
//$publickey=openssl_pkey_get_details($res);
//$publickey=$publickey["key"];

$id_proyecto=$_POST['id_proy'];

$query_proy="SELECT pr.id_proy,pr.nombre, pr.apat, pr.amat,pp.nombre,pp.apat,pp.amat,cm.modalidad,cc.cuerpo, cg.grado
FROM proyecto_responsable pr,  proyecto p, cat_modalidad cm,  proyecto_participantes pp,cat_cuerpo cc, cat_grado cg
WHERE (pr.id_proy = pp.id_proy) AND (pr.id_proy = p.id_proy) AND (p.id_mod = cm.id_mod) AND (pr.id_ca = cc.id_ca) AND (pr.id_agrado = cg.id_grado)
AND pr.id_proy = $id_proyecto ";

$query_part="SELECT nombre, apat, amat FROM proyecto_participantes WHERE id_proy = $id_proyecto";

$resultado2 = $conn->query($query_part);
$resultado = $conn->query($query_proy);

$ver=mysqli_fetch_row($resultado);
$id_proy = utf8_decode($ver[0]);
$nombre = utf8_decode($ver[1]);
$ap_pat = utf8_decode($ver[2]);
$ap_mat = utf8_decode($ver[3]);
$nombre2 = utf8_decode($ver[4]);
$ap_pat2 = utf8_decode($ver[5]);
$ap_mat2 = utf8_decode($ver[6]);
$modalidad = utf8_decode($ver[7]);
$cuerpo = utf8_decode($ver[8]);
$grado = utf8_decode($ver[9]);
//echo $resultado;
 $conn->query("SET CHARACTER SET 'utf8'");
class PDF extends FPDF
{
  //$publickey=openssl_pkey_get_details($res);

  function Header()
{
    // Logo
    $this->Image('fondo.jpg',0,0,210,290);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    $this->Ln(40);
}
  function ChapterBody($file)
{
    // Leemos el fichero
    $datos = file_get_contents($file);
    //todos los valores obtenidos a utf8
    $txt=utf8_decode($datos);
    //Arial italika 9
    $this->SetFont('Arial','I',9);
    // Imprimimos el texto justificado
    $this->MultiCell(0,5,$txt);
    $this->SetFont('Arial','B',9);


}
function Footer()
{
  $res=openssl_pkey_new();
  // Get private key
  openssl_pkey_export($res, $privatekey);
  $publickey=openssl_pkey_get_details($res);
  $publickey=$publickey["key"];
  // Posición: a 1,5 cm del final
  // Go to 1.5 cm from bottom


  $this->SetY(-35);
  $this->SetX(30);
  // Select Arial italic 8
  $this->SetFont('Arial','I',8);
  // Print current and total page numbers
    // code...
  //$this->Image('pie.png');
/*
    if ( $this->PageNo()+1) {
      $cont=($this->PageNo())+1;
      $this->Cell(0,10,$this->PageNo()."/".$cont,0,0,'C');
    }
*/
    $this->SetFont('Arial','B',6);
    $this->SetY(-70);
    $this->SetX(115);
    $this->MultiCell(800,3,$publickey);
    //$this->Cell(0,10,'Sin otro particular, le extiendo a usted mis felicitaciones y me despido con un cordial saludo '.$this->PageNo(),0,0,'C');
}

  function PrintChapter($file)
{
    $this->AddPage();
    $this->ChapterBody($file);
}
}
$pdf = new PDF();
$pdf->SetAutoPageBreak(true,35);
$pdf->SetMargins(30.0,10.0,30.0);
//$pdf->Cell(40,10,'TITULO DEL PROYECTO',0,0);
$pdf->PrintChapter('mensajePrincipal.txt');
$pdf->Cell(40,10,'TITULO DEL PROYECTO',0,0);
$pdf->MultiCell(100,5,$cuerpo,0,1);
$pdf->Cell(40,10,'CLAVE DEL PROYECTO',0,1);
$pdf->Cell(40,10,'MODALIDAD',0,0);
$pdf->Cell(40,10,$modalidad,0,1);
$pdf->Cell(40,10,'MONTO ASIGANDO',0,1);
$pdf->SetMargins(70.0,50.0,0.0);
$pdf->Cell(40,10,'COLABORADORES',0,0);
while ($ver2=mysqli_fetch_row($resultado2)) {
  $pdf->Cell(40,10,utf8_decode($ver2[0])." ".utf8_decode($ver2[1])." ".utf8_decode($ver2[2]),0,1);
}
$pdf->SetMargins(30.0,10.0,0.0);
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,10,'Sin otro particular, le extiendo a usted mis felicitaciones y me despido con un cordial saludo ',0,1);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,5,"A T E N T A M E N T E",0,1);
$pdf->Cell(0,5,utf8_decode("Pensar bien, para vivir mejor"),0,1);
$pdf->Cell(0,5,"Puebla, Pue., de Z. a abril de 2019",0,1);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,5,"Dr.",0,1);
$pdf->Cell(0,5,utf8_decode("Director General de Investigación"),0,1);
$pdf->Cell(0,5,utf8_decode("Vicerrectoría de Investigación y Estudios de Posgrado"),0,1);
$pdf->Cell(0,5,utf8_decode("Benemérita Universidad Autónoma de Puebla"),0,1);
$pdf->Image('firrma.jpg',40,160,20,20);

//$pdf->Cell(0,5,"D’JREC/cha",0,1);
//$pdf->AddPage();
$pdf->Output();


?>
