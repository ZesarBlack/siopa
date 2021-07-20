<?php
include "conexion.php";

class Servicio{

    private $conn;

    public function GET(){
      $conn =  conectarDB();
      $sql = "SELECT * FROM Vista_Datos_personalesSIIAForta";
      $res = odbc_exec($conn, $sql);
      if(!$res){die();}
      else {
          $empleados = array();
          $i=0;
          while ($data = odbc_fetch_array($res)) {
                  $id_empleado[$i]=$data["Id_Empleado"];
                  $numControl[$i] = $data["No_ControlMunicipio"];
                  $status[$i] = $data["Tipo_Status"];
                  $tipo_emp [$i]= $data["TipoEmpleado"];
                  $nombre[$i]= $data["Nombre"];
                  $fecha_nac[$i] = $data["Fecha_Nacimiento"];
                  $sexo [$i]= $data["Sexo"];
                  $entidad[$i]= $data["Entidad"];
                  $municipio[$i]= $data["Municipio"];
                  $poblacion[$i]= $data["Id_Poblacion"];
                  $sm[$i] = $data["TipoServiciosMedicos"];
                  $ss[$i] = $data["No_SS"];
                  $placa [$i]= $data["No_PlacaPolicia"];
                  $expediente[$i] = $data["No_Expediente"];
                  $licencia[$i] = $data["No_Licencia"];
                  $cartilla[$i]=$data["No_Cartilla"];
                  $num_elector[$i]= $data["No_Elector"];
                  $plaza[$i] = $data["Id_Plaza"];
                  $coordinacion[$i] = $data["No_Coordinacion"];
                  $pasaporte[$i] = $data["No_Pasaporte"];
                  $rfc [$i]= $data["RFC"];
                  $curp [$i]= $data["CURP"];
                  $estado_civil[$i] = $data["EstadoCivil"];
                  $nacionalidad[$i] = $data["Nacionalidad"];
                  $pais [$i]= $data["Pais"];
                  $telefono[$i] = $data["Telefono"];
                  $sector[$i] = $data["No_Sector"];
                  $compania[$i]=$data["No_Compania"];
                  $Fecha_ExpideLic[$i]= $data["Fecha_ExpideLic"];
                  $Fecha_VenceLic[$i] = $data["Fecha_VenceLic"];
                  $nomina[$i] = $data["Tipo_Nomina"];
                  $contrato[$i] = $data["Tipo_Contrato"];
                  $Ubica_Exp_Archivero[$i] = $data["Ubica_Exp_Archivero"];
                  $Ubica_Exp_Gaveta [$i]= $data["Ubica_Exp_Gaveta"];
                  $Ubica_Exp_Obs [$i]= $data["Ubica_Exp_Obs"];
                  $No_PlacaPoliciaInt[$i] = $data["No_PlacaPoliciaInt"];
                  $movil[$i] = $data["Movil"];
                  $email[$i] = $data["Email"];
                  $calle[$i] = $data["Calle"];
                  $nExterior[$i] = $data["No_Exterior"];
                  $nInterior[$i] = $data["No_Interior"];
                  $colonia [$i]= $data["Colonia"];
                  $idColonia[$i] =$data["Id_Colonia"];
                  $cp[$i] = $data["CP"];


                  $empleados[$i] = array('id' => $id_empleado[$i], 'nombre' => $nombre[$i], 'nacimiento' => $fecha_nac[$i], 'entidad' =>$entidad[$i], 'municipio' => $municipio[$i], 'no_control' => $numControl[$i],
                  'tipo_empleado' => $tipo_emp[$i],'no_placa' => $No_PlacaPoliciaInt[$i],'Tipo_Servicio' => $sm[$i],'No_sm' => $ss[$i],'no_cartilla' => $cartilla[$i],'rfc' => $rfc[$i],'curp' => $curp[$i],'sector' => $sector[$i],
                  'compania' => $compania[$i],'expedicion_licencia' => $Fecha_ExpideLic[$i],'vencimiento_licencia' => $Fecha_VenceLic[$i],'coordinacion' => $coordinacion[$i],'movil' => $movil[$i],'correo' => $email[$i],
                  'calle' => $calle[$i],'nExterior' => $nExterior[$i],'nInterior' => $nInterior[$i],'colonia' => $colonia[$i],'cp' => $cp[$i]);
                    header("HTTP/1.1 200 OK");
                    echo json_encode($empleados[$i]);
                    $i++;
                  }
              }
          odbc_close($conn);

  }

    public function GetSingle($id){
        $conn =  conectarDB();
        $sql = "SELECT * FROM Vista_Datos_personalesSIIAForta where Id_Empleado='$id'";
          $res = odbc_exec($conn, $sql);
            $empleados = array();
            while ($data = odbc_fetch_array($res)) {
                    $id_empleado=$data["Id_Empleado"];
                    $numControl = $data["No_ControlMunicipio"];
                    $status = $data["Tipo_Status"];
                    $tipo_emp = $data["TipoEmpleado"];
                    $nombre= $data["Nombre"];
                    $fecha_nac = $data["Fecha_Nacimiento"];
                    $sexo = $data["Sexo"];
                    $entidad= $data["Entidad"];
                    $municipio= $data["Municipio"];
                    $poblacion= $data["Id_Poblacion"];
                    $sm = $data["TipoServiciosMedicos"];
                    $ss = $data["No_SS"];
                    $placa = $data["No_PlacaPolicia"];
                    $expediente = $data["No_Expediente"];
                    $licencia = $data["No_Licencia"];
                    $cartilla=$data["No_Cartilla"];
                    $num_elector= $data["No_Elector"];
                    $plaza = $data["Id_Plaza"];
                    $coordinacion = $data["No_Coordinacion"];
                    $pasaporte = $data["No_Pasaporte"];
                    $rfc = $data["RFC"];
                    $curp = $data["CURP"];
                    $estado_civil = $data["EstadoCivil"];
                    $nacionalidad = $data["Nacionalidad"];
                    $pais = $data["Pais"];
                    $telefono = $data["Telefono"];
                    $sector = $data["No_Sector"];
                    $compania=$data["No_Compania"];
                    $Fecha_ExpideLic= $data["Fecha_ExpideLic"];
                    $Fecha_VenceLic = $data["Fecha_VenceLic"];
                    $nomina = $data["Tipo_Nomina"];
                    $contrato = $data["Tipo_Contrato"];
                    $Ubica_Exp_Archivero = $data["Ubica_Exp_Archivero"];
                    $Ubica_Exp_Gaveta = $data["Ubica_Exp_Gaveta"];
                    $Ubica_Exp_Obs = $data["Ubica_Exp_Obs"];
                    $No_PlacaPoliciaInt = $data["No_PlacaPoliciaInt"];
                    $movil = $data["Movil"];
                    $email = $data["Email"];
                    $calle = $data["Calle"];
                    $nExterior = $data["No_Exterior"];
                    $nInterior = $data["No_Interior"];
                    $colonia = $data["Colonia"];
                    $idColonia =$data["Id_Colonia"];
                    $cp = $data["CP"];

                    $empleados[] = array("policia"=>array('id' => $id_empleado, 'nombre' => $nombre, 'nacimiento' => $fecha_nac, 'entidad' =>$entidad, 'municipio' => $municipio, 'no_control' => $numControl,
                    'tipo_empleado' => $tipo_emp,'no_placa' =>$No_PlacaPoliciaInt,'Tipo_Servicio' => $sm,'No_sm' => $ss,'no_cartilla' => $cartilla,'rfc' => $rfc,'curp' => $curp,'sector' => $sector,
                    'compania' => $compania,'expedicion_licencia' => $Fecha_ExpideLic,'vencimiento_licencia' => $Fecha_VenceLic,'coordinacion' => $coordinacion,'movil' => $movil,'correo' => $email,
                    'calle' => $calle,'nExterior' => $nExterior,'nInterior' => $nInterior,'colonia' => $colonia,'cp' => $cp));
                    header("HTTP/1.1 200 OK");
                    echo json_encode($empleados);
                }
        odbc_close($conn);
    }
  //desconectarDB($conn);

  public function GetCurp($curp){
    $conn =  conectarDB();
    $sql = "SELECT * FROM Vista_Datos_personalesSIIAForta da where da.CURP='$curp'";
      $res = odbc_exec($conn, $sql);
        $empleados = array();
        while ($data = odbc_fetch_array($res)) {
                $id_empleado=$data["Id_Empleado"];
                $numControl = $data["No_ControlMunicipio"];
                $status = $data["Tipo_Status"];
                $tipo_emp = $data["TipoEmpleado"];
                $nombre= $data["Nombre"];
                $fecha_nac = $data["Fecha_Nacimiento"];
                $sexo = $data["Sexo"];
                $entidad= $data["Entidad"];
                $municipio= $data["Municipio"];
                $poblacion= $data["Id_Poblacion"];
                $sm = $data["TipoServiciosMedicos"];
                $ss = $data["No_SS"];
                $placa = $data["No_PlacaPolicia"];
                $expediente = $data["No_Expediente"];
                $licencia = $data["No_Licencia"];
                $cartilla=$data["No_Cartilla"];
                $num_elector= $data["No_Elector"];
                $plaza = $data["Id_Plaza"];
                $coordinacion = $data["No_Coordinacion"];
                $pasaporte = $data["No_Pasaporte"];
                $rfc = $data["RFC"];
                $curp = $data["CURP"];
                $estado_civil = $data["EstadoCivil"];
                $nacionalidad = $data["Nacionalidad"];
                $pais = $data["Pais"];
                $telefono = $data["Telefono"];
                $sector = $data["No_Sector"];
                $compania=$data["No_Compania"];
                $Fecha_ExpideLic= $data["Fecha_ExpideLic"];
                $Fecha_VenceLic = $data["Fecha_VenceLic"];
                $nomina = $data["Tipo_Nomina"];
                $contrato = $data["Tipo_Contrato"];
                $Ubica_Exp_Archivero = $data["Ubica_Exp_Archivero"];
                $Ubica_Exp_Gaveta = $data["Ubica_Exp_Gaveta"];
                $Ubica_Exp_Obs = $data["Ubica_Exp_Obs"];
                $No_PlacaPoliciaInt = $data["No_PlacaPoliciaInt"];
                $movil = $data["Movil"];
                $email = $data["Email"];
                $calle = $data["Calle"];
                $nExterior = $data["No_Exterior"];
                $nInterior = $data["No_Interior"];
                $colonia = $data["Colonia"];
                $idColonia =$data["Id_Colonia"];
                $cp = $data["CP"];

                $empleados[] = array('id' => $id_empleado, 'nombre' => $nombre, 'nacimiento' => $fecha_nac, 'entidad' =>$entidad, 'municipio' => $municipio, 'no_control' => $numControl,
                'tipo_empleado' => $tipo_emp,'no_placa' =>$No_PlacaPoliciaInt,'Tipo_Servicio' => $sm,'No_sm' => $ss,'no_cartilla' => $cartilla,'rfc' => $rfc,'curp' => $curp,'sector' => $sector,
                'compania' => $compania,'expedicion_licencia' => $Fecha_ExpideLic,'vencimiento_licencia' => $Fecha_VenceLic,'coordinacion' => $coordinacion,'movil' => $movil,'correo' => $email,
                'calle' => $calle,'nExterior' => $nExterior,'nInterior' => $nInterior,'colonia' => $colonia,'cp' => $cp);
                header("HTTP/1.1 200 OK");
                echo json_encode($empleados);
            }
    odbc_close($conn);
  }

  public function GetNombre($nombre){
    $conn =  conectarDB();
    $sql = "SELECT * FROM Vista_Datos_personalesSIIAForta  WHERE Nombre LIKE '%$nombre%'";
    $res = odbc_exec($conn, $sql);
    if(!$res){die();}
    else {
        $empleados = array();
        $i=0;
        while ($data = odbc_fetch_array($res)) {
                $id_empleado[$i]=$data["Id_Empleado"];
                $numControl[$i] = $data["No_ControlMunicipio"];
                $status[$i] = $data["Tipo_Status"];
                $tipo_emp [$i]= $data["TipoEmpleado"];
                $nombre[$i]= $data["Nombre"];
                $fecha_nac[$i] = $data["Fecha_Nacimiento"];
                $sexo [$i]= $data["Sexo"];
                $entidad[$i]= $data["Entidad"];
                $municipio[$i]= $data["Municipio"];
                $poblacion[$i]= $data["Id_Poblacion"];
                $sm[$i] = $data["TipoServiciosMedicos"];
                $ss[$i] = $data["No_SS"];
                $placa [$i]= $data["No_PlacaPolicia"];
                $expediente[$i] = $data["No_Expediente"];
                $licencia[$i] = $data["No_Licencia"];
                $cartilla[$i]=$data["No_Cartilla"];
                $num_elector[$i]= $data["No_Elector"];
                $plaza[$i] = $data["Id_Plaza"];
                $coordinacion[$i] = $data["No_Coordinacion"];
                $pasaporte[$i] = $data["No_Pasaporte"];
                $rfc [$i]= $data["RFC"];
                $curp [$i]= $data["CURP"];
                $estado_civil[$i] = $data["EstadoCivil"];
                $nacionalidad[$i] = $data["Nacionalidad"];
                $pais [$i]= $data["Pais"];
                $telefono[$i] = $data["Telefono"];
                $sector[$i] = $data["No_Sector"];
                $compania[$i]=$data["No_Compania"];
                $Fecha_ExpideLic[$i]= $data["Fecha_ExpideLic"];
                $Fecha_VenceLic[$i] = $data["Fecha_VenceLic"];
                $nomina[$i] = $data["Tipo_Nomina"];
                $contrato[$i] = $data["Tipo_Contrato"];
                $Ubica_Exp_Archivero[$i] = $data["Ubica_Exp_Archivero"];
                $Ubica_Exp_Gaveta [$i]= $data["Ubica_Exp_Gaveta"];
                $Ubica_Exp_Obs [$i]= $data["Ubica_Exp_Obs"];
                $No_PlacaPoliciaInt[$i] = $data["No_PlacaPoliciaInt"];
                $movil[$i] = $data["Movil"];
                $email[$i] = $data["Email"];
                $calle[$i] = $data["Calle"];
                $nExterior[$i] = $data["No_Exterior"];
                $nInterior[$i] = $data["No_Interior"];
                $colonia [$i]= $data["Colonia"];
                $idColonia[$i] =$data["Id_Colonia"];
                $cp[$i] = $data["CP"];


                $empleados[$i] = array('id' => $id_empleado[$i], 'nombre' => $nombre[$i], 'nacimiento' => $fecha_nac[$i], 'entidad' =>$entidad[$i], 'municipio' => $municipio[$i], 'no_control' => $numControl[$i],
                'tipo_empleado' => $tipo_emp[$i],'no_placa' => $No_PlacaPoliciaInt[$i],'Tipo_Servicio' => $sm[$i],'No_sm' => $ss[$i],'no_cartilla' => $cartilla[$i],'rfc' => $rfc[$i],'curp' => $curp[$i],'sector' => $sector[$i],
                'compania' => $compania[$i],'expedicion_licencia' => $Fecha_ExpideLic[$i],'vencimiento_licencia' => $Fecha_VenceLic[$i],'coordinacion' => $coordinacion[$i],'movil' => $movil[$i],'correo' => $email[$i],
                'calle' => $calle[$i],'nExterior' => $nExterior[$i],'nInterior' => $nInterior[$i],'colonia' => $colonia[$i],'cp' => $cp[$i]);
                  header("HTTP/1.1 200 OK");
                  echo json_encode($empleados[$i]);
                  $i++;
                }
            }
        odbc_close($conn);

}


}
?>
