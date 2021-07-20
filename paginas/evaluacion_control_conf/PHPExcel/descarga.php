<?php
header("Content-disposition: attachment; filename=aspirantes_C3.xlsx");
header("Content-type: *.xlsx");
readfile("aspirantes_C3.xlsx");
header("Location: ../cad_apto.php");
 ?>
