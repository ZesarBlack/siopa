<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    TIPO DE DÍAS QUE VA A SUMAR
    <select class="" id="tipo" name="tipo">
      <option value="naturales">NATULARES</option>
      <option value="habiles">HABILES</option>
    </select>
    <br>
    DIGITE LA CANTIDAD QUE VA A SUMAR (se contaran a partir de hoy)
    <input type="number" name="dias" id="dias" value="" onkeyup="sumarDias(this)">
    <br>
    <div class="" id="resultado">
    </div>
  </body>
</html>
<script type="text/javascript" src="jquery.min.js">

</script>
<script type="text/javascript" src="dias.js"></script>
