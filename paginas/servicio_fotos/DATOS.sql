Bases de datos


use SIIA-FORTAMUN;
use SIIA;


SI LA FOTO EXISTE EN QUE CAMPO

SELECT * FROM fotos fo  WHERE fo.id_empleado= (select Id_Empleado from Datos_personales da WHERE da.No_ControlMunicipio='300885' and da.Tipo_Status=1 )


 UPDATE O INSERT


/*
UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'C:\operativos\23-04-21\311004.JPG', SINGLE_BLOB) AS fotos) WHERE id_empleado =1392;
UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'C:/operativos/23-04-21/311004.JPG', SINGLE_BLOB) AS fotos) WHERE id_empleado =1392
UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'C:/operativos/23-04-21/311004.JPG', SINGLE_BLOB) AS fotos) WHERE id_empleado =1392
UPDATE fotos SET fotos.foto = (SELECT * FROM OPENROWSET(BULK N'C:/operativos/23-04-21/101688.JPG', SINGLE_BLOB) AS fotos) WHERE id_empleado =2213
*/


el PATH DONDE ESTAN LAS FOTOS

C:\operativos\23-04-21\
