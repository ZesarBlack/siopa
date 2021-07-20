<html>
<head>
  <title></title>
</head>
<body>
  <?php

       $nombre= $_POST["nombre"]; 
       $ap_paterno= $_POST["apepat"];
       $ap_materno= $_POST["apemat"]; 
       $genero= $_POST["genero"];
       $fecha_nac= $_POST["FechaNacimiento"]; 
       $lugar_nac= $_POST["LugarNacimiento"];
       $mun_nac= $_POST["Municipio"];
       $curp= $_POST["CURP"]; 
       $rfc= $_POST["RFC"]; 
       $imss= $_POST["Nosegur"]; 
       $smn= $_POST["Cartilla"];
      
       
       include '../../requires/conexion.php';

       $conexion= mysqli_connect($db_host, $db_usuario, $db_contra);
           if (mysqli_connect_errno()){
             echo "Fallo al conectar con la BBDD";
             exit();
           }
       mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
       mysqli_set_charset($conexion, "utf8");

       $consulta= "INSERT INTO pru(nombre,ap_paterno,ap_materno,genero,fecha_nac,lugar_nac,mun_nac,curp,rfc,imss,smn)
                      VALUES ('$nombre', '$ap_paterno', '$ap_materno', ' $genero', '$fecha_nac', '$lugar_nac', '$mun_nac', '$curp','$rfc','$imss','$smn')";
       $resultado= mysqli_query($conexion, $consulta);
echo "exito";
       mysqli_close($conexion);
  ?>
</body>
</html>
