  <?php
  /**
   *
   */
  class Cedula
  {

    public function capturar(
    $cui, $fec, $ent, $ins, $per, $fec2, $nom,
    $pat,$mat,$fecn,$sex,$cur,$rfc,$cla,$pas,$car,$lic,
    $vig,$nac,$fenat,$pais,$entn,$munn,$ciun,$nacn,$est,
    $niv,$esc,$esp,$ced,$feci,$fect,$reg,$cer,$pro,
    $cal,$ext,$int,$col,$entc,$yca,$cod,$tel,$entf,$mun,
    $tip,$actd,$card,$bacd,$cedd,$pend,$eled,$licd,$gen
    ){
      include '../../requires/conexion.php';
      $consulta= "INSERT INTO cedula (CUIP, FLLENADO1, ENTIDAD, INSTITUCION, PERFIL, FLLENADO2, NOMBRE, PATERNO,
                     MATERNO, FNACIMIENTO, SEXO, CURP, RFC, ELECTOR, PASAPORTE, CARTILLA, LICENCIA, VIGENCIA,
                     NACIONALIDAD, FNATURALIZADO, PAIS, ENTIDADN, MUNICIPION, CIUDAD, NACIONALIDADN, CIVIL,
                     NIVELEST, ESCUELA, ESPECIALIDAD, CEDULAP, FECHAINI, FECHATER, REGISTRO, CERTIFICADO, PROMEDIO,
                     CALLE, EXTERIOR, INTERIOR, COLONIA, ENTREC, YCALLE, CPOSTAL, TELEFONO, ENTIDADF, MUNICIPIO,
                     TIPO, ACTAN, CARTILLAD, BACHILLER, CEDULAPD, ANTECEDENTES, ELECTORD, LICENCIAD, GENERACION)
                     VALUES ('$cui', '$fec', '$ent', '$ins', '$per', '$fec2', '$nom', '$pat',
                             '$mat','$fecn','$sex','$cur','$rfc','$cla','$pas','$car','$lic', '$vig',
                             '$nac','$fenat','$pais','$entn','$munn','$ciun','$nacn','$est',
                             '$niv','$esc','$esp','$ced','$feci','$fect','$reg','$cer','$pro',
                             '$cal','$ext','$int','$col','$entc','$yca','$cod','$tel','$entf','$mun',
                             '$tip','$actd','$card','$bacd','$cedd','$pend','$eled','$licd','$gen')";

      if(mysqli_query($conn, $consulta)){
          echo "<center>Se ha guardado exitosamente</center>";
          echo $consulta;
      }else{
          echo "Error as: ". mysqli_error($conn);
      }
      header("Location: ../lista_cadetes/lista_cadetes.php");
      $conn->close();
    }

    public function docsPersonalesSubir($value='')
    {

    }
    public function docsPersonaleseliminar($value='')
    {

    }
  }
$cedula = new Cedula();
$cui= $_POST["cuip"]; $fec= $_POST["llenado"];
$ent= $_POST["entidad"]; $ins= $_POST["ads"];
$per= $_POST["perfil"]; $fec2= $_POST["llenadoe"];
$nom= $_POST["nombre"]; $pat= $_POST["paterno"];
$mat= $_POST["materno"]; $fecn= $_POST["fechan"];
$sex= $_POST["sexo"]; $cur= $_POST["curp"];
$rfc= $_POST["rfc"]; $cla= $_POST["clave"];
$pas= $_POST["pasap"]; $car= $_POST["cartilla"];
$lic= $_POST["licencia"]; $vig= $_POST["vigen"];
$fenat= $_POST["fechanat"];$pais= $_POST["paisn"];
$munn= $_POST["munin"]; $ciun= $_POST["ciudadn"];
$nacn= $_POST["nacion"]; $est= $_POST["estadoc"];
$esc= $_POST["escuela"]; $esp= $_POST["espec"];
$ced= $_POST["cedp"]; $feci= $_POST["fechai"];
$fect= $_POST["fechat"]; $reg= $_POST["registro"];//--
$cer= $_POST["certif"]; $pro= $_POST["prom"];
$cal= $_POST["calle"]; $ext= $_POST["ext"];
$int= $_POST["int"]; $col= $_POST["colonia"];
$entc= $_POST["entre"]; $yca= $_POST["ycalle"];
$cod= $_POST["codpostal"]; $tel= $_POST["telef"];
$entf= $_POST["entidadf"]; $mun= $_POST["municipio"];
$tip= $_POST["tipo"]; $actd= $_POST["actad"];
$card= $_POST["cartd"]; $bacd= $_POST["bachid"];
$cedd= $_POST["cedd"]; $pend= $_POST["penad"];
$eled= $_POST["elecd"]; $licd= $_POST["licend"];
$gen= $_POST["genera"]; $nac= $_POST["naciona"];//---
$niv= $_POST["nivele"];
$entn= $_POST["entidadn"];

$cedula->capturar(
  $cui, $fec, $ent, $ins, $per, $fec2, $nom,
  $pat,$mat,$fecn,$sex,$cur,$rfc,$cla,$pas,$car,$lic,
  $vig,$nac,$fenat,$pais,$entn,$munn,$ciun,$nacn,$est,
  $niv,$esc,$esp,$ced,$feci,$fect,$reg,$cer,$pro,
  $cal,$ext,$int,$col,$entc,$yca,$cod,$tel,$entf,$mun,
  $tip,$actd,$card,$bacd,$cedd,$pend,$eled,$licd,$gen
);

  ?>
