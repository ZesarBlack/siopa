<html>
<head>
  <title></title>
</head>
<body>
  <?php

       $fol= $_POST["folio"]; $fec= $_POST["fecha"];
       $est= $_POST["estado"]; $nom= $_POST["nombre"];
       $con= $_POST["control"]; $pes= $_POST["peso"];
       $esta= $_POST["esta"]; $imc= $_POST["imc"];
       $tat= $_POST["tatu"]; $per= $_POST["perfo"];
       $lac= $_POST["lact"]; $vis= $_POST["vision"];
       $vob= $_POST["obser"]; $dal= $_POST["dalto"];
       $dob= $_POST["obserd"]; $oid= $_POST["oido"];
       $oob= $_POST["obsero"]; $loc= $_POST["loco"];
       $lob= $_POST["obserl"];

       include '../../requires/conexion.php';

       $consulta= "INSERT INTO perfil_medico (folio, id_Usuario, fecha, peso, imc, estatura, tatuajes,
                                       perforaciones, lactando, vision, observ_vision, daltonismo, observ_dalto,
                                       oido, observ_oido, locomotor, observ_locomotor, estado)
                               VALUES ('$fol', '$con','$fec', '$pes', '$imc', '$esta', '$tat',
                                       '$per', '$lac', '$vis', '$vob', '$dal', '$dob',
                                       '$oid', '$oob', '$loc', '$lob', '$est')";
       $resultado= mysqli_query($conn, $consulta);
       mysqli_close($conn);
       echo $consulta;
       echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
       header("Location: medico.php")

  ?>
</body>
</html>
