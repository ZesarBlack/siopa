<?php
header("Content-disposition: attachment; filename=evaluacion_competencias.xlsx");
header("Content-type: *.xlsx");
readfile("evaluacion_competencias.xlsx");
 ?>
