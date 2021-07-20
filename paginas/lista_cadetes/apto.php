<?php
header("Content-disposition: attachment; filename=Lista_cadetes.xlsx");
header("Content-type: *.xlsx");
readfile("Lista_cadetes.xlsx");
 ?>
