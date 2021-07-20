<?php

/**
 *
 */
class Elemento
{
  public function obtenerInformacion($id)
  {
    require '../../requires/conexion.php';
    $query = "SELECT * FROM cadete WHERE idCadete = '$id'";
    $resultado = $conn->query($query);
    $datos = mysqli_fetch_row($resultado);
    return $datos;
    $conn->close();
  }

  public function guardarCambios($llenado, $tipoIngreso, $folio, $paterno, $materno, $nombre, $fechan, $edad, $genero, $curp,
                          $correo, $celular, $telef1, $telef2, $grado_es, $exPoli, $estadoCivil, $medioInfo, $dep_acterior, $calle, $ext, $int,
                          $codpostal, $colonia, $municipio, $estado ,$solicitud_completa, $solicitud_observacion, $acta_nac, $acta_nac_observacion, $doc_curp, $doc_curp_observacion, $doc_id, $doc_id_observacion,
                          $doc_licencia, $doc_licencia_observacion, $const_ante, $const_ante_observacion, $comp_estudios, $comp_estudios_observacion, $cartilla, $cartilla_observacion, $const_no_sus, $const_no_sus_observacion, $baja_voluntaria,
                          $baja_voluntaria_observacion, $comp_domicilio, $comp_domicilio_observacion, $referencias, $referencias_observacion, $curriculum, $curriculum_observacion, $rfc, $rfc_observacion, $imss, $imss_observacion)
  {
    require '../../requires/conexion.php';
    $query_guardar = "UPDATE cadete SET f_llenado = '$llenado',  tipo_ingreso= '$tipoIngreso',  folio ='$folio',  a_paterno='$paterno' ,  a_materno='$materno' ,  nombre='$nombre' ,  f_nacimiento='$fechan' ,  edad_registro= '$edad',  genero ='$genero',  curp='$curp',
                        email='$correo' ,  tel_celular='$celular' ,  tel_1 ='$telef1',  tel_2= '$telef2',  grado_estudio='$grado_es' ,  exp_o_exm='$exPoli' ,  estado_civil='$estadoCivil' ,  metodo_e_empleo='$medioInfo', dependencia='$dep_acterior' ,  calle='$calle' ,  n_exterior='$ext' ,  n_interior='$int' ,
                        c_postal='$codpostal' ,  colonia='$colonia' ,  municipio='$municipio' , estado ='$estado' , s_empleo='$solicitud_completa' ,  s_empleo_observacion='$solicitud_observacion' ,  acta_nacimiento='$acta_nac' ,  acta_nacimiento_observacion='$acta_nac_observacion' ,  doc_curp='$doc_curp' ,  doc_curp_observacion='$doc_curp_observacion' ,  identificacion_ine='$doc_id' ,  identificacion_ine_observacion='$doc_id_observacion',
                        lic_conducir ='$doc_licencia' ,  lic_conducir_obervacion='$doc_licencia_observacion' ,  no_penales='$const_ante' ,  no_penales_observacion='$const_ante_observacion' ,  comprobante_estudios='$comp_estudios' ,  comprobante_estudios_observacion='$comp_estudios_observacion' ,  cartilla_smn='$cartilla' ,  cartilla_smn_observacion='$cartilla_observacion' ,  no_inhabiltado='$const_no_sus' ,  no_inhabilitado_observacion='$const_no_sus_observacion' ,  baja_voluntaria='$baja_voluntaria' ,
                        baja_voluntaria_observacion='$baja_voluntaria_observacion' ,  comprobante_domicilio='$comp_domicilio' ,  comprobante_domicilio_observacion='$comp_domicilio_observacion' ,  referencias_personales='$referencias' ,  referencias_personales_observacion='$referencias_observacion' ,  curriculum='$curriculum' ,  curriculum_observacion='$curriculum_observacion' ,  documento_rfc='$rfc' ,  documento_rfc_observacion='$rfc_observacion' ,  documento_seguro_sosial='$imss' ,  documento_seguro_sosial_observacion='$imss_observacion' WHERE folio = '$folio'";


    $resultado_guardar = $conn->query($query_guardar);
    $conn->close();
    //echo $query_guardar;
    //echo '<script type="text/javascript">
    //alert("el resultado del aspirante ha sido registrado");
    //window.location.href = "../lista_cadetes/lista_cadetes.php";
    //</script>';
    header('Location:../lista_cadetes/lista_cadetes.php');
  }
}

$elemento = new Elemento();
//------------------------------------------------------------------------------
if(isset($_POST['llenado'])){
    $llenado = $_POST['llenado'];
}
if (isset($_POST["estado"])) {
    $estado=$_POST["estado"];
}
if (isset($_POST["dependencia_anterior"])) {
    $dep_acterior = $_POST["dependencia_anterior"];
}else {
  $dep_acterior = "No ex policia ni ex militar";
}
if(isset($_POST['tipoIngreso'])){
    if(strlen($_POST['tipoIngreso']) <= 45){
        $tipoIngreso = $_POST['tipoIngreso'];
    }
}
if(isset($_POST['folio'])){
    if(strlen($_POST['folio']) <= 45){
        $folio = $_POST['folio'];
    }else{
        echo "<script>alert('El Folio debe de contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['paterno'])){
    if(strlen($_POST['paterno']) <= 45){
        $paterno = $_POST['paterno'];
    }else{
        echo "<script>alert('El Apellido Paterno debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['materno'])){
    if(strlen($_POST['materno']) <= 45){
        $materno = $_POST['materno'];
    }else{
        echo "<script>alert('El Apellido Materno debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['nombre'])){
    if(strlen($_POST['nombre']) <= 45){
        $nombre = $_POST['nombre'];
    }else{
        echo "<script>alert('El nombre debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['fechan'])){
    if(strlen($_POST['fechan']) <= 45){
        $fechan = $_POST['fechan'];
    }else{
        echo "<script>alert('La fecha de nacimiento debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['edad'])){

    if(strlen( $_POST[ 'edad' ] ) <= 45 ){
        if( is_numeric( $_POST['edad'])){
            $edad = $_POST['edad'];
        }else{
            echo "<script>alert('Verifique el valor de edad proporcionado');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }else{
        echo "<script>alert('La fecha de nacimiento debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }

  //$edad = $_POST['edad'];
}
if(isset($_POST['genero'])){
    if(strlen($_POST['genero']) <= 45){
        $genero = $_POST['genero'];
    }else{
        echo "<script>alert('El genero debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['curp'])){
    if(strlen($_POST['curp']) <= 45){
        $curp = $_POST['curp'];
    }else{
        echo "<script>alert('El curp debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['correo'])){
    if(strlen($_POST['correo']) <= 45){
        $correo = $_POST['correo'];
    }else{
        echo "<script>alert('El correo debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}

if(isset($_POST['celular'])){
    if(strlen( $_POST[ 'celular' ] ) <= 45 ){
        if( is_numeric( $_POST['celular'])){
            $celular = $_POST['celular'];
        }else{
            $celular = "";
            /*
            echo "<script>alert('Verifique el valor de celular proporcionadoxxx');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
            */
        }
    }else{
        echo "<script>alert('El celular debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['telef-1'])){
    if(strlen( $_POST[ 'telef-1' ] ) <= 45 ){
        if( is_numeric( $_POST['telef-1'])){
            $telef1 = $_POST['telef-1'];
        }else{
          $telef1 = "";
          /*
            echo "<script>alert('Verifique el valor del telefono 1 proporcionado');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
            */
        }
    }else{
        echo "<script>alert('El telefono 1 debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['telef-2'])){
    if(strlen( $_POST[ 'telef-2' ] ) <= 45 ){
        if( is_numeric( $_POST['telef-2'])){
            $telef2 = $_POST['telef-2'];
        }else{
          $telef2 = "";
          /*
            echo "<script>alert('Verifique el valor de telefono 2 proporcionado');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
            */
        }
    }else{
        echo "<script>alert('El telefono 2 debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}

if(isset($_POST['grado_es'])){
    if(strlen($_POST['grado_es']) <= 45){
        $grado_es = $_POST['grado_es'];
    }else{
        echo "<script>alert('El último grado de estudios debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['exPoli'])){
    $exPoli = $_POST['exPoli'];
}
if(isset($_POST['estadoCivil'])){
    if(strlen($_POST['estadoCivil']) <= 45){
        $estadoCivil = $_POST['estadoCivil'];
    }else{
        echo "<script>alert('El estado civil debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['medioInfo'])){
    if(strlen($_POST['medioInfo']) <= 45){
        $medioInfo = $_POST['medioInfo'];
    }else{
        echo "<script>alert('El medio de informacion debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['calle'])){
    if(strlen($_POST['calle']) <= 45){
        $calle = $_POST['calle'];
    }else{
        echo "<script>alert('La calle debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['ext'])){
    if(strlen($_POST['ext']) <= 45){
        $ext = $_POST['ext'];
    }else{
        echo "<script>alert('El numero exterior  debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['int'])){
    if(strlen($_POST['int']) <= 45){
        $int = $_POST['int'];
    }else{
        echo "<script>alert('El numero interior  debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['codpostal'])){
    if(strlen( $_POST[ 'codpostal' ] ) == 5 ){
        if( is_numeric( $_POST['codpostal'])){
            $codpostal = $_POST['codpostal'];
        }else{
            echo "<script>alert('Verifique el valor del codigo postal proporcionado');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }else{
        echo "<script>alert('El codigo postal debe contener 5 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['colonia'])){
    if(strlen($_POST['colonia']) <= 45){
        $colonia = $_POST['colonia'];
    }else{
        echo "<script>alert('La colonia debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['municipio'])){
    if(strlen($_POST['municipio']) <= 45){
        $municipio = $_POST['municipio'];
    }else{
        echo "<script>alert('El municipio debe contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['solicitud_completa'])){
    $solicitud_completa = $_POST['solicitud_completa'];
}
if(isset($_POST['solicitud_observacion'])){
    if(strlen($_POST['solicitud_observacion']) <= 45){
        $solicitud_observacion = $_POST['solicitud_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la solicitud de empleo deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['acta_nac'])){
    $acta_nac = $_POST['acta_nac'];
}
if(isset($_POST['acta_nac_observacion'])){
    if(strlen($_POST['acta_nac_observacion']) <= 45){
        $acta_nac_observacion = $_POST['acta_nac_observacion'];
    }else{
        echo "<script>alert('Las observaciones del acta de nacimiento deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['doc_curp'])){
    $doc_curp = $_POST['doc_curp'];
}
if(isset($_POST['doc_curp_observacion'])){
    if(strlen($_POST['doc_curp_observacion']) <= 45){
        $doc_curp_observacion = $_POST['doc_curp_observacion'];
    }else{
        echo "<script>alert('Las observaciones del curp deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['doc_id'])){
    $doc_id = $_POST['doc_id'];
}
if(isset($_POST['doc_id_observacion'])){
    if(strlen($_POST['doc_id_observacion']) <= 45){
        $doc_id_observacion= $_POST['doc_id_observacion'];
    }else{
        echo "<script>alert('Las observaciones del documento de identificación deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['doc_licencia'])){
    $doc_licencia = $_POST['doc_licencia'];
}
if(isset($_POST['doc_licencia_observacion'])){
    if(strlen($_POST['doc_licencia_observacion']) <= 45){
        $doc_licencia_observacion = $_POST['doc_licencia_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la licencia de conducir deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['const_ante'])){
    $const_ante = $_POST['const_ante'];
}
if(isset($_POST['const_ante_observacion'])){
    if(strlen($_POST['doc_licencia_observacion']) <= 45){
        $const_ante_observacion = $_POST['const_ante_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la licencia de conducir deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['comp_estudios'])){
    $comp_estudios = $_POST['comp_estudios'];
}
if(isset($_POST['comp_estudios_observacion'])){
    if(strlen($_POST['comp_estudios_observacion']) <= 45){
        $comp_estudios_observacion = $_POST['comp_estudios_observacion'];
    }else{
        echo "<script>alert('Las observaciones del comprobante de estudios deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['cartilla'])){
    $cartilla = $_POST['cartilla'];
}
if(isset($_POST['cartilla_observacion'])){
    if(strlen($_POST['cartilla_observacion']) <= 45){
        $cartilla_observacion = $_POST['cartilla_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la cartilla del servicio militar deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['const_no_sus'])){
    $const_no_sus = $_POST['const_no_sus'];
}
if(isset($_POST['const_no_sus_observacion'])){
    if(strlen($_POST['const_no_sus_observacion']) <= 45){
        $const_no_sus_observacion = $_POST['const_no_sus_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la constancia de no habilitación deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['baja_voluntaria'])){
    $baja_voluntaria = $_POST['baja_voluntaria'];
}
if(isset($_POST['baja_voluntaria_observacion'])){
    if(strlen($_POST['baja_voluntaria_observacion']) <= 45){
        $baja_voluntaria_observacion = $_POST['baja_voluntaria_observacion'];
    }else{
        echo "<script>alert('Las observaciones de la baja voluntaria deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['comp_domicilio'])){
    $comp_domicilio = $_POST['comp_domicilio'];
}
if(isset($_POST['comp_domicilio_observacion'])){
    if(strlen($_POST['comp_domicilio_observacion']) <= 45){
        $comp_domicilio_observacion = $_POST['comp_domicilio_observacion'];
    }else{
        echo "<script>alert('Las observaciones del comprobante de comicilio deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['referencias'])){
    $referencias = $_POST['referencias'];
}
if(isset($_POST['referencias_observacion'])){
    if(strlen($_POST['referencias_observacion']) <= 45){
        $referencias_observacion = $_POST['referencias_observacion'];
    }else{
        echo "<script>alert('Las observaciones de las referencias deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['curriculum'])){
    $curriculum = $_POST['curriculum'];
}
if(isset($_POST['curriculum_observacion'])){
    if(strlen($_POST['curriculum_observacion']) <= 45){
        $curriculum_observacion = $_POST['curriculum_observacion'];
    }else{
        echo "<script>alert('Las observaciones del curriculum vitae deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['rfc'])){
    $rfc = $_POST['rfc'];
}
if(isset($_POST['rfc_observacion'])){
    if(strlen($_POST['rfc_observacion']) <= 45){
        $rfc_observacion = $_POST['rfc_observacion'];
    }else{
        echo "<script>alert('Las observaciones del RFC deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if(isset($_POST['imss'])){
    $imss = $_POST['imss'];
}
if(isset($_POST['imss_observacion'])){
    if(strlen($_POST['imss_observacion']) <= 45){
        $imss_observacion = $_POST['imss_observacion'];
    }else{
        echo "<script>alert('Las observaciones del numero de seguridad social deben contener menos de 45 caracteres');</script>";
        echo "<html><head></head>".
        "<body onload=\"javascript:history.back()\">".
        "</body></html>";
        exit;
    }
}
if (isset($_POST['folio'])) {
  
  $elemento->guardarCambios($llenado, $tipoIngreso, $folio, $paterno, $materno, $nombre, $fechan, $edad, $genero, $curp,
                          $correo, $celular, $telef1, $telef2, $grado_es, $exPoli, $estadoCivil, $medioInfo, $dep_acterior, $calle, $ext, $int,
                          $codpostal, $colonia, $municipio, $estado ,$solicitud_completa, $solicitud_observacion, $acta_nac, $acta_nac_observacion, $doc_curp, $doc_curp_observacion, $doc_id, $doc_id_observacion,
                          $doc_licencia, $doc_licencia_observacion, $const_ante, $const_ante_observacion, $comp_estudios, $comp_estudios_observacion, $cartilla, $cartilla_observacion, $const_no_sus, $const_no_sus_observacion, $baja_voluntaria,
                          $baja_voluntaria_observacion, $comp_domicilio, $comp_domicilio_observacion, $referencias, $referencias_observacion, $curriculum, $curriculum_observacion, $rfc, $rfc_observacion, $imss, $imss_observacion);

//echo $baja_voluntaria_observacion;
}
//------------------------------------------------------------------------------


 ?>
