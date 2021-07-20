 <?php
 //  require 'conexion.php';
 //	$conn =  conectarBDSIIA();
 //	$connn =  conectarDB();
 /**
  *
  */
 class Fotos
 {
   public function verificarPersonalSIIA()
   {
     require 'conexion.php';
     $conn =  conectarBDSIIA();

       $control = fopen("08-06-21.txt", "r");
       //echo $control;
       if ($control) {
           while (($n_control = fgets($control, 4096)) !== false) {
           $num_control = intval($n_control);

           //---------------------------------------------------------------------
           $query1="SELECT * FROM Datos_personales da WHERE da.No_ControlMunicipio ='$num_control' AND da.Tipo_Status=1";
           $result1=odbc_exec($conn,$query1);
           if (odbc_num_rows($result1) > 0){
             //echo $num_control;
             //echo "<br>";

             while ($row1=odbc_fetch_array($result1))
               {
                 $id=$row1['Id_Empleado'];
                   $query_fotos="SELECT * FROM fotos fo  WHERE fo.id_empleado='$id'";
                   $result_fotos=odbc_exec($conn,$query_fotos);
                   if (odbc_num_rows($result_fotos) > 0){
                     $id_empleado = trim($row1['No_ControlMunicipio']);
                     $ruta='C:/operativos/08-06-21/'.$id_empleado.'.JPG';
                     echo $ruta;
                     echo "---";
                     echo "hay foto  ";
                     echo "---";
                     echo $row1['Nombre'];
                     echo "hay foto  ";

                     $query_subir="UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$id";
                      echo $query_subir;
                     echo "<br>";
                     odbc_exec($conn,$query_subir);
                  }else {
                    $id_empleado = trim($row1['Id_Empleado']);
                    $ruta='C:/operativos/08-06-21/'.$id_empleado.'.JPG';
                    /*
                     echo $ruta;
                     echo $row1['Id_Empleado'];
                     echo $row1['no_control'];
                     echo "no hay foto  ";
                     */
                    //$query_subir="INSERT INTO fotos (foto) VALUES (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";

                    $query_subir="INSERT INTO fotos(id_empleado,TipoEmpleado,foto) VALUES('$id_empleado','M','')";

                    echo $query_subir;
                    echo "<br>";
                    odbc_exec($conn,$query_subir);
                  }
               }

               }
           //---------------------------------------------------------------------
           }
       }
   }

   public function verificarPersonalSIIAFORTAMUN()
   {
     require 'conexion.php';
     $connn =  conectarDB();

       $control = fopen("08-06-21.txt", "r");
       //echo $control;
       if ($control) {
           while (($n_control = fgets($control, 4096)) !== false) {
           $num_control = intval($n_control);

           //---------------------------------------------------------------------
           $query1="SELECT * FROM Datos_personales da WHERE da.No_ControlMunicipio ='$num_control' AND da.Tipo_Status=1";
           $result1=odbc_exec($connn,$query1);
           if (odbc_num_rows($result1) > 0){
                 while ($row1=odbc_fetch_array($result1))
                   {
                   $id=$row1['Id_Empleado'];
                   $query_fotos="SELECT * FROM fotos fo  WHERE fo.id_empleado='$id'";
                   $result_fotos=odbc_exec($connn,$query_fotos);
                   if (odbc_num_rows($result_fotos) > 0){
                     $id_empleado = trim($row1['No_ControlMunicipio']);
                     $ruta='C:/operativos/08-06-21/'.$id_empleado.'.JPG';
                     echo $ruta;
                     echo "---";
                     echo "hay foto  ";
                     echo "---";
                     echo $row1['Nombre'];


                     $query_subir="UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$id";
                     echo $query_subir;
                     echo "<br>";
                     odbc_exec($connn,$query_subir);
                  }else {
                    $id_empleado = trim($row1['No_ControlMunicipio']);
                    $ruta='C:/operativos/08-06-21/'.$id_empleado.'.JPG';
                     echo "no hay foto  ";
                    //$query_subir="INSERT INTO fotos (foto) VALUES (SELECT * FROM OPENROWSET(BULK N'$ruta', SINGLE_BLOB)  AS fotos) WHERE id_empleado =$row1[0]";
                    $query_subir="INSERT INTO fotos(id_empleado,TipoEmpleado,foto) VALUES('$id_empleado','M','')";
                    echo $query_subir;
                    //echo "<br>";
                    mssql_query($connn,$query_subir);
                  }
                   }
               }
           //---------------------------------------------------------------------
           }
       }
   }
 }

 $foto = new Fotos();
 $foto->verificarPersonalSIIA();
 //$foto->verificarPersonalSIIAFORTAMUN();
  ?>
