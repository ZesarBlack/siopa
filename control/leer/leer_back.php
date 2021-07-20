<?php
/**
 *
 */

class Subir
{
  public function subirDocumento($direccion)
  {
    $direccion ="C:/xampp/htdocs/academia/leer/prueba2.csv";
    require '../requires/conexion.php';
    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial.csv' INTO TABLE cadete FIELDS TERMINATED BY ',' LINES TERMINATED BY ''\r\n' (folio, f_llenado, a_paterno,  a_materno,  nombre,  f_nacimiento,  edad_registro ,  curp,  rfc,  genero,  estado_civil, calle, colonia, municipio, estado, c_postal, nolic, nocartilla, tel_celular,  tel_1, tel_2, email, grado_estudio, carrera_g, exp_o_exm,  dependencia, entidad_dep,  metodo_e_empleo)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial.csv' INTO TABLE cadete FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (folio, f_llenado, a_paterno,  a_materno,  nombre,  f_nacimiento,  edad_registro ,  curp,  rfc,  genero,  estado_civil, calle, colonia, municipio, estado, c_postal, nolic, nocartilla, tel_celular,  tel_1, tel_2, email, grado_estudio, carrera_g, exp_o_exm,  dependencia, entidad_dep,  metodo_e_empleo)";
    $resultado = $conn->query($query);
    $conn->close();
  }
}
$subir = new Subir();
if (isset($_FILES["file"])) {
  $subir->subirDocumento($_FILES["file"]["tmp_name"]);
};
    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial_medico.csv' INTO TABLE exa_medico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_id, conclusion)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial_medico.csv' INTO TABLE exa_medico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_id, conclusion)";

    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial_fisico.csv' INTO TABLE exa_fisico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_idCadete, resultado, promedio)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial_fisico.csv' INTO TABLE exa_fisico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_idCadete, resultado, promedio, manejo)";
"SELECT DISTINCT folio, f_llenado, cad.nombre, a_paterno, a_materno, f_nacimiento, edad_registro, tel_celular, tel_1, tel_2, tipo_ingreso, idCadete FROM cadete AS cad
 INNER JOIN exa_m AS cad ON cadete_id = folio
 WHERE conclusion LIKE'%APTO%'
SELECT * FROM exa_medico WHERE conclusion LIKE'%APTO%'";
 ?>

 mysql> SET FOREIGN_KEY_CHECKS=0;
Query OK, 0 rows affected (0.00 sec)

mysql> TRUNCATE cadete;
Query OK, 0 rows affected (0.06 sec)

mysql> SET FOREIGN_KEY_CHECKS=1;
Query OK, 0 rows affected (0.00 sec)

mysql> LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial.csv' INTO TABLE cadete FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' (folio, f_llenado, a_paterno,  a_materno,  nombre,  f_nacimiento,  edad_registro ,  curp,  rfc,  genero,  estado_civil, calle, colonia, municipio, estado, c_postal, nolic, nocartilla, tel_celular,  tel_1, tel_2, email, grado_estudio, carrera_g, exp_o_exm,  dependencia, entidad_dep,  metodo_e_empleo);
Query OK, 705 rows affected, 20 warnings (0.16 sec)
Records: 705  Deleted: 0  Skipped: 0  Warnings: 20

mysql>  update cadete set tipo_ingreso = 'Nuevo Ingreso';
Query OK, 705 rows affected (0.07 sec)
Rows matched: 705  Changed: 705  Warnings: 0
