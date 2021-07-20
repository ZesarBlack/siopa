<!DOCTYPE html>
<html lang="en">
  <?php
  require '../../requires/head2.php';
  require 'estimulos_back.php';
  $capacitacion->excelCapacitacion("");
   ?>
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

        <div class="right_col border border-primary" role="main" style="background-color: #E9E9E9;">

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      <div class="animated flipInY ">
                        <div class="tile-stats" style="border: 2px solid #000000;">
                          <h3>
                              Estimulos
                          </h3>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                          <div class="col-md-2">
                            <button type="button" class="btn btn-primary" name="button" onclick="limpiarDatos()" data-toggle="modal" data-target="#myModal">Agregar</button>
                          </div>
                          <div class="col-md-4">
                            <input type="text" id="busqueda_r" name="busqueda_r" onkeyup="buscarRegistros(this)" class="form form-control" placeholder="Buscar registros por CUIP" value="">
                          </div>
                          <div class="col-md-4" >
                          </div>
                          <div class="col-md-2" >
                            <form class="" action="exceldescarga.php" method="post">
                                <button type="submit" class="btn btn-success" name="button" >Descargar reporte de busqueda</button>
                            </form>
                          </div>
                            <div class="x_content" style="overflow:auto; overflow:scroll; height: 50em">
                                <!-- content starts here ////////////////////-->
                                <table class="table table-striped jambo_table table-bordered">
                                  <thead>
                                    <th>Nombre completo</th>
                                    <th>CUIP</th>
                                    <th>Número de Control</th>
                                    <th>Motivo</th>
                                    <th>Estímulo</th>
                                    <th>Número de Sesión de la Comisión en que se aprueba</th>
                                    <th>Fecha de recepción del Estímulo</th>
                                  </thead>
                                  <tbody id="datos_capacitacion">
                                    <?php $capacitacion->obtenerRegistros(); ?>
                                  </tbody>
                                </table>
                                <!-- content ends here////////////////////// -->

                                <!--MODAL PARA REGISTRO DEL CURSO-->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h3 class="modal-title">Registrar estimulo</h3>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">


                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">CUIP</div>
                                                      <div class="col-sm-7">
                                                          <input id="control" class="form form-control" onkeyup="mayus(this)" value="" name="control" type="text" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="45" required>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Motivo</div>
                                                      <div class="col-sm-7">
                                                        <textarea id="motivo" value name="motivo" style="margin: 0px; width: 100%; height: 101px;"></textarea>
                                                        <!--
                                                          <input id="nombre_curso" class="form form-control" onkeyup="mayus(this)" value="" name="nombre_curso" type="text" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                                        -->
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Estimulo otorgado</div>
                                                      <div class="col-sm-7">
                                                        <select class="form form-control" name="estimulo" id="estimulo">
                                                          <option value="Premio Municipal al Buen Policía">Premio Municipal al Buen Policía</option>
                                                          <option value="Condecoración">Condecoración</option>
                                                          <option value="Mención Honorífica">Mención Honorífica</option>
                                                          <option value="Distintivo">Distintivo</option>
                                                          <option value="Citación">Citación</option>
                                                          <option value="Recompensa">Recompensa</option>
                                                        </select>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;" id="tip_merito" hidden>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3">Condecoraciones</div>
                                                    <div class="col-sm-7">
                                                      <select class="form form-control" name="merito" id="merito">
                                                        <option value="Mérito Policial">Mérito Policial</option>
                                                        <option value="Mérito Tecnológico">Mérito Tecnológico</option>
                                                        <option value="Mérito Deportivo">Mérito Deportivo</option>
                                                        <option value="Mérito Social">Mérito Social</option>
                                                        <option value="Mérito Ejemplar">Mérito Ejemplar</option>
                                                        <option value="Mérito Docente">Mérito Docente</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Número de Sesión de la Comisión en que se aprueba.</div>
                                                      <div class="col-sm-7">
                                                          <input id="num_sesion" class="form form-control" onkeyup="mayus(this)" value="" name="num_sesion" type="number" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                                      </div>
                                                  </div>

                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Intancia Capacitadora</div>
                                                      <div class="col-sm-7">

                                                            <input id="fecha_rec" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_rec" type="date" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;' maxlength="20" required>

                                                      </div>
                                                  </div>

                                                  <div class="row" style="margin-top:2em;">
                                                    <div class="txt_carga" id="spinner" hidden>
                                                      Buscando...
                                                      <div class="loader" >
                                                      </div>
                                                    </div>
                                                    <table class="table">
                                                      <tbody id="datos">
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" onclick="registrarEstimulo()" class="btn btn-primary">Registrar</button>
                                                  </div>
                                          </div>
                                          <!-- Modal footer -->

                                      </div>
                                  </div>
                                </div>
                                <!--////MODAL PARA REGISTRO DEL CURSO-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="estimulos.js"></script>

</script>
