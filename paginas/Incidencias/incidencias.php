<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php'; ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Academia</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <?php require '../../requires/inf_usr.php'  ?>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <?php include '../../requires/sidebar.php'; ?>

            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <?php require '../../requires/top_nav.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <?php require '../../requires/titulo.php'; ?>
          <!-- /top tiles -->
          <!--<div class="row">-->
            <!--todo nuestro contenido----------------------------------------->
            <div class="container-fluid" style="background-color:#ffffff ; margin-left: 2em; margin-right:2em;">
              <div class="row" style="margin:auto; margin-top:1rem" >
                <div class="col-md-12 text-center" style="margin-bottom:2em;"><h2>Nuevo Registro de Incidencias del Personal</h2></div>
              </div>
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <div class="form-group" style="display:flex; flex-direction:row;justify-content:center;align-items:center;">
                          <label>Buscar Elemento: </label>
                          <input type="text" class="form-control" name="buscarElemento" id="buscarElemento" style="margin-left:2rem; margin-right:2rem">
                          <button class="btn btn-default">Buscar</button>
                      </div>
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-3" id="NoControl">No. de Control: ******</p></div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3" id="AreaFuncional">Area Funcional: ******</p></div>
                  <div class="col-md-2"></div>

              </div>
              <!--div class="row" style="margin:auto">-
                  <div class="col-md-12">-->
                  <form action="nueva_incidencia.php" method="POST">
                      <div class="form-row" style="margin-left:2em; margin-right:2em;">
                        <div class="form-group">
                          <label for="nombre">Incidencia</label>
                          <input class="form-control" type="number" name="Incidencia" id="Incidencia">
                        </div>
                      </div>
                      <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-6">
                          <label for="FechaInicio"> Fecha de Inicio de Incidencia</label>
                          <input type="date" class="form-control" name="FechaInicio" id="NombreCurso">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="FechaFin">Fecha de Finalización de Incidencia</label>
                          <input type="date" class="form-control" name="FechaFin" id="NombreCurso">
                        </div>
                      </div>
                      <div class="form-row"  style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-6">
                          <label for="Duracion">Número de Días</label>
                            <input type="number" class="form-control" name="Dias" id="Dias">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Creditos">Encargado</label>
                            <input type="text" class="form-control" name="Encargado" id="Encargado">
                        </div>
                      </div>
                      <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-12">
                            <label for="Observaciones"> Observaciones</label>
                            <input type="textarea" class="form-control" name="Observaciones" id="NombreCurso">
                        </div>
                      </div>
                      <?php

                        if (isset($_GET['curso'])) {
                          $idCurso  = $_GET['curso'];
                      }else{
                        $idCurso = 0;
                      }
                      echo "<input type='hidden' name='no_control' value=1>";
                      ?>

                      <div class="form-group">
                          <div class="row">
                              <div class="col sm-12 text-center"><button class="btn btn-primary" style="margin-top:1.5rem;" type="submit">Registrar</button></div>

                          </div>
                      </div>
                  </form>
                  </div>


                  <!--<div class="col-md-3"></div>
                  <div class="col-md-3">Nombre del Curso o Capacitación</div>
                  <div class="col-md-3"><input type="text" name="NombreCurso" id="NombreCurso"></div>
                  <div class="col-md-3"></div>-->
              </div>
                  <!--/todo nuestro contenido----------------------------------------->
            </div>    <!--</div>-->
            </div>
            <!-- /page content -->
         <!-- </div>
        </div>-->
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
 var nombre="";
 var fecha="";
 var tipo="";
$(document).on('keyup','#nombre', function(event){
	nombre = $(this).val();
  enviar(nombre, fecha, tipo);
});
$(document).ready(function(){
	$("#fecha").change(function(event){
        fecha = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});
$(document).ready(function(){
	$("#tipo").change(function(event){
        tipo = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});

function enviar(nombre, fecha, tipo){
    buscar_datos(nombre, fecha, tipo);
}
</script>
<script>
    $(document).ready(function(){
        $('#datos').load('cargar_curso.php');
	});
</script>
