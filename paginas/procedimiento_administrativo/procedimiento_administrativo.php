<!DOCTYPE html>
<html lang="en">
  <?php
  require '../../requires/head2.php';
  require 'procedimiento_back.php';
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
                              Capacitación continua
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
                            <div class="x_content" style="overflow:auto; overflow:scroll; height: 50em">
                                <!-- content starts here ////////////////////-->
                                <table class="table table-striped jambo_table table-bordered">
                                  <thead>
                                    <th>Nombre completo</th>
                                    <th>CUIP</th>
                                    <th>Número de Control</th>
                                    <th>Número de expediente </th>
                                    <th>Motivo del Procedimiento</th>
                                    <th>Resolución</th>
                                    <th>Fecha separación o remoción</th>
                                    <th>Periodo</th>
                                    <th>Instancia sancionadora</th>
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
                                                          <input id="control" onkeyup="mayus(this)" class="form form-control" onkeyup="mayus(this)" value="" name="control" type="text" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="45" required>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Número de expediente</div>
                                                      <div class="col-sm-7">
                                                        <input type="text" onkeyup="mayus(this)" style='font-size: 12pt;
                                                        font-weight: bold; color: red; text-align: center;' class="form form-control" name="numex" id="numex" value="">
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Motivo del procedimiento</div>
                                                      <div class="col-sm-7">
                                                        <input type="text" style='font-size: 12pt;
                                                        font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this)" class="form form-control" name="motivo" id="motivo" value="">
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Resolución</div>
                                                      <div class="col-sm-7">
                                                        <select class="form form-control" name="resolucion" id="resolucion">
                                                          <option value="Separación">Separación</option>
                                                          <option value="Remoción">Remoción</option>
                                                          <option value="Suspención Provicional">Suspención Provicional</option>
                                                        </select>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Fecha separación o remoción</div>
                                                      <div class="col-sm-7">
                                                          <input id="fseparacion" class="form form-control" onkeyup="mayus(this)" value="" name="fseparacion" type="date" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Periodo</div>
                                                      <div class="col-sm-7">
                                                            <input id="periodo" class="form form-control" onkeyup="mayus(this)" value="" name="periodo" type="text" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                                      </div>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Instancia sancionadora</div>
                                                      <div class="col-sm-7">
                                                            <input id="instancia" class="form form-control" onkeyup="mayus(this)" value="" name="instancia" type="text" style='font-size: 12pt;
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
                                                      <button type="button" onclick="registrarProcadmin()" class="btn btn-primary">Registrar</button>
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
<script type="text/javascript" src="procedimiento.js"></script></script>
