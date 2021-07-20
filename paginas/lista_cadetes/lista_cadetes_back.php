<?php
/**
 *
 */

class ListCadete
{

  function obtenerCadete($id)
  {
    require '../../requires/conexion.php';
    //$conn->query("SET CHARACTER SET 'utf8'");
    //$nombre_cadete = $conn->real_escape_string($nom);
    //$id_cadete = $conn->real_escape_string($id);
    if ($id != "") {
          $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE idCadete LIKE '$id'";
    }
    //echo $query_cadetes;
    $resultado = $conn->query($query_cadetes);

    if($cadetes=mysqli_fetch_array($resultado)) {
    echo  '<tr>
            <td><h2>'.$cadetes[0].'</h2></td>
            <td><h2>'.$cadetes[1].'</h2></td>
            <td><h2>'.$cadetes[2].'</h2></td>
            <td><h2>'.$cadetes[3].'</h2></td>
            <td><h2>'.$cadetes[4].'</h2></td>
            <td><h2>'.$cadetes[5].'</h2></td>
            <td><h2>'.$cadetes[6].'</h2></td>
            <td><h2>'.$cadetes[8].'</h2></td>
             <td>
               <form action="../detalle_cadete/detalles.php" method="post">
                 <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                 <button type="submit" name="button">Ver detalles</button>
               </form>
             </td>
             <td>
               <form action="../editar_elemento/editar_elemento.php" method="post">
                 <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                 <button type="submit" name="button">Editar</button>
               </form>
             </td>
             <td>
               <form action="pdf.php" method="post">
                 <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                 <button type="submit" name="button">Expedir pdf</button>
               </form>
             </td>
          </tr>';
        }
        $conn->close();
  }

  function obtenerCadetes($tipo, $busqueda)
  {
    require '../../requires/conexion.php';
    //$conn->query("SET CHARACTER SET 'utf8'");
    if ($tipo != "" && $busqueda != "") {
      if ($tipo == "genero") {
        $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE genero LIKE '%$busqueda%' ";
      }elseif ($tipo == "edad") {
        $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE edad_registro like '%$busqueda%'";
      }elseif ($tipo == "folio") {
        $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE folio like '%$busqueda%'";
      }elseif ($tipo == "reingreso") {
        $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE tipo_ingreso like '%$busqueda%'";
      }elseif ($tipo == "nombre") {
        $piezas = explode(" ", $busqueda);
        if(sizeof($piezas) == 1){
          $nombre = $piezas[0];
          $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE nombre like '%$nombre%' or a_paterno like '%$nombre%' ";
        }else if(sizeof($piezas) == 2){
          $nombre = $piezas[0];
          $paterno = $piezas [1];
          $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%') "; //nombre like '%$nombre2%'
        }else if(sizeof($piezas) == 3){
          $nombre = $piezas[0];
          $paterno = $piezas[1];
          $materno = $piezas[2];
          $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%' and a_materno like '%$materno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%' AND  nombre like '%$materno%')";
        }else if(sizeof($piezas) == 4){
          $nombre = $piezas[0];
          $nombre2 = $piezas[0]." ".$piezas[1];
          $paterno = $piezas [1];
          $paterno2 = $piezas[2];
          $materno = $piezas[2];
          $materno2 = $piezas[3];
          $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE (nombre like '%$nombre2%' and a_paterno like '%$paterno2%' and a_materno like '%$materno2%')";
        }} else {
        $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete";
      }
    }
    if (isset($query_cadetes)) {
      // code...
      $resultado = $conn->query($query_cadetes);
      $conn->close();
      //echo '<label>Rasultados:'.count($cadetes=mysqli_fetch_array($resultado)).' </label>';
      while ($cadetes=mysqli_fetch_array($resultado)) {
              echo
                    '<tr>
                      <td><h2>'.$cadetes[0].'</h2></td>
                      <td><h2>'.$cadetes[1].'</h2></td>
                      <td><h2>'.$cadetes[2].'</h2></td>
                      <td><h2>'.$cadetes[3].'</h2></td>
                      <td><h2>'.$cadetes[4].'</h2></td>
                      <td><h2>'.$cadetes[5].'</h2></td>
                      <td><h2>'.$cadetes[6].'</h2></td>
                      <td><h2>'.$cadetes[8].'</h2></td>
                       <td>
                         <form action="../detalle_cadete/detalles.php" method="post">
                           <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                           <button type="submit" name="button">Ver detalles</button>
                         </form>
                       </td>
                       <td>
                         <form action="../editar_elemento/editar_elemento.php" method="post">
                           <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                           <button type="submit" name="button">Editar</button>
                         </form>
                       </td>
                       <td>
                         <form action="pdf.php" method="post">
                           <input type="text" id="id" name="id" value="'.$cadetes[7].'"readonly hidden>
                           <button type="submit" name="button">Expedir pdf</button>
                         </form>
                       </td>
                    </tr>';
      }
            return $cadetes;
    }


  }
  public function cambiarValidez($id,$observaciones){
    require '../../requires/conexion.php';
    $query_validez="UPDATE cadete SET validacion='invalido', validacion_ob='$observaciones' where idCadete=$id ";
    $conn->query($query_validez);
    $conn->close();
    //echo $query_validez;

  }
  public function axcelAspirantes($tipor)
  {
    $i=1;
    include '../../requires/conexion.php';
    if ($tipor === "todos") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio";
      // code...
    }elseif ($tipor === "masculino") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Masculino%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Masculino%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Masculino%' ";
      // code...
    }elseif ($tipor === "femenino") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Femenino%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Femenino%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE genero LIKE '%Femenino%'";
      // code...
    }elseif ($tipor === "reingreso") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Reingreso%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Reingreso%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Reingreso%'";
      // code...
    }elseif ($tipor === "nuevos") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Nuevo Ingreso%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Nuevo Ingreso%'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE '%Nuevo Ingreso%'";
      // code...
    }elseif ($tipor === "exp") {
      $query= "SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON cadete_id = folio
      LEFT JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE 'Si'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      LEFT   JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE tipo_ingreso LIKE 'Si'
      UNION
      SELECT DISTINCT folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, municipio_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo, tipo_ingreso
      FROM cadete  AS c
      RIGHT  JOIN  exa_medico AS em ON cadete_id = folio
      RIGHT  JOIN examen_fisico AS ef ON cadete_idCadete = folio WHERE exp_o_exm LIKE 'Si'";
      // code...
    }
    $respuesta=$conn->query($query);
    $conn->close();

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();
    // Set document properties
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    //$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);


    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'FOLIO')
                ->setCellValue('B1', 'FECHA DE RECEPCIÓN DE DOCUMENTOS')
                ->setCellValue('C1', 'NOMBRE')
                ->setCellValue('D1', 'APELLIDO PATERNO')
                ->setCellValue('E1', 'APELLIDO MATERNO')
                ->setCellValue('F1', 'NOMBRE(S)')
                ->setCellValue('G1', 'FECHA DE NACIMIENTO')
                ->setCellValue('H1', 'EDAD')
                ->setCellValue('I1', 'CURP')
                ->setCellValue('J1', 'RFC')
                ->setCellValue('K1', 'GÉNERO')
                ->setCellValue('L1', 'ESTADO CIVIL')
                ->setCellValue('M1', 'DOMICILIO')
                ->setCellValue('N1', 'COLONIA')
                ->setCellValue('O1', 'MUNICIPIO')
                ->setCellValue('P1', 'ESTADO')
                ->setCellValue('Q1', 'CP')
                ->setCellValue('R1', 'NO. DE LICENCIA')
                ->setCellValue('S1', 'CARTILLA DE SERVICIO MILITAR')
                ->setCellValue('T1', 'CELULAR')
                ->setCellValue('U1', 'TELÉFONO 1')
                ->setCellValue('V1', 'TELÉFONO 2')
                ->setCellValue('W1', 'CORREO ELECTRONICO')
                ->setCellValue('X1', 'ESCOLARIDAD')
                ->setCellValue('Y1', 'ESPECIALIDAD')
                ->setCellValue('Z1', 'EX POLICIA O EX MILITAR')
                ->setCellValue('AA1', 'CARGO')
                ->setCellValue('AB1', 'LUGAR')
                ->setCellValue('AC1', 'MEDIO POR EL QUE SE ENTERÓ DE LA CONVOCATORIA')
                ->setCellValue('AD1', 'RESULTADO EXAMEN MÉDICO')
                ->setCellValue('AE1', 'RESULTADO EXAMEN FÍSICO')
                ->setCellValue('AF1', 'CALIFICACIÓN EXAMEN FÍSICO')
                ->setCellValue('AG1', 'MANEJA');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1])
                      ->setCellValue('C'.$i, $aptos[2]." ".$aptos[3]." ".$aptos[4])
                      ->setCellValue('D'.$i, $aptos[2])
                      ->setCellValue('E'.$i, $aptos[3])
                      ->setCellValue('F'.$i, $aptos[4])
                      ->setCellValue('G'.$i, $aptos[5])
                      ->setCellValue('H'.$i, $aptos[6])//EDAD
                      ->setCellValue('I'.$i, $aptos[7])//CURP
                      ->setCellValue('J'.$i, $aptos[8])
                      ->setCellValue('K'.$i, $aptos[9])
                      ->setCellValue('L'.$i, $aptos[10])
                      ->setCellValue('M'.$i, $aptos[11].$aptos[12])
                      ->setCellValue('N'.$i, $aptos[13])
                      ->setCellValue('O'.$i, $aptos[14])
                      ->setCellValue('P'.$i, $aptos[15])
                      ->setCellValue('Q'.$i, $aptos[16])
                      ->setCellValue('R'.$i, $aptos[17])
                      ->setCellValue('S'.$i, $aptos[18])
                      ->setCellValue('T'.$i, $aptos[19])
                      ->setCellValue('U'.$i, $aptos[20])
                      ->setCellValue('V'.$i, $aptos[21])
                      ->setCellValue('W'.$i, $aptos[22])
                      ->setCellValue('X'.$i, $aptos[23])
                      ->setCellValue('Y'.$i, $aptos[24])
                      ->setCellValue('Z'.$i, $aptos[25])
                      ->setCellValue('AA'.$i, $aptos[26])
                      ->setCellValue('AB'.$i, $aptos[27]." ".$aptos[28])
                      ->setCellValue('AC'.$i, $aptos[29])
                      ->setCellValue('AD'.$i, $aptos[30])
                      ->setCellValue('AE'.$i, $aptos[31])
                      ->setCellValue('AF'.$i, $aptos[32])
                      ->setCellValue('AG'.$i, $aptos[33])
                      ;


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(25);

    $objPHPExcel->getActiveSheet()->getStyle('A1:AG1')->applyFromArray(
              array(
              'font'  => array(
                  'bold'  => true,
                  'color' => array('rgb' => 'FFFFFF'),
                  'size'  => 11
              ),
              'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => '333F4F')
                )
            )
    );

    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Lista_cadetes.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }


}
$listaCadetes = new ListCadete();

if (isset($_POST['tipo']) && isset($_POST['busqueda'])) {
  $listaCadetes->obtenerCadetes($_POST['tipo'], $_POST['busqueda']);
}

if (isset($_POST["id"])) {
  $listaCadetes->cambiarValidez($_POST["id"]);
}

if (isset($_POST['tipor']) && $_POST['tipor'] !="") {
  $listaCadetes->axcelAspirantes($_POST['tipor']);
}


 ?>
