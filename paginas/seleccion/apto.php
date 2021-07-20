<?php
header("Content-disposition: attachment; filename=Reporte_aprobados.xlsx");
header("Content-type: *.xlsx");
readfile("Reporte_aprobados.xlsx");
 ?>
