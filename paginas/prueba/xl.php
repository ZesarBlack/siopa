<?php
//$fp = fopen("aspirantes_C3.xlsx", "a+");
header("Content-disposition: attachment; filename=aspirantes_C3.xlsx");
header("Content-type: *.xlsx");
readfile("aspirantes_C3.xlsx");
 ?>
