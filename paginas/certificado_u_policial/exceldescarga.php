<?php
header("Content-disposition: attachment; filename=certificado_policial.xlsx");
header("Content-type: *.xlsx");
readfile("certificado_policial.xlsx");
 ?>
