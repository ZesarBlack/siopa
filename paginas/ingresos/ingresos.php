<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'ingresos_back.php';
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
                              Ingresos
                          </h3>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                          <div class="row tile_count">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                              <span class="count_top"><i class="fa fa-user"></i> Total de Registros</span>
                              <div class="count"><?php $ingreso->numeroPolicias(); ?></div>
                              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
                            </div>
                          </div>
                          <div class="col-md-2">
                            <select class="form-control has-feedback-right" id="tipo" name="tipo">
                              <option value="control">Número de Control</option>
                              <option value="cuip">CUIP</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <input type="text" name="busqueda" id="busqueda" value="" placeholder="Número de control del Elemento" class="form-control has-feedback-right">
                          </div>
                          <div class="col-md-2">
                            <button type="button" onclick="busquedaXtipo()" name="button" class="btn btn-primary">Buscar</button>
                          </div>
                          <div class="col-md-2">
                            <button type="button" onclick="limpiarDatos()" name="button" class="btn btn-primary">Limpiar Tabla</button>
                          </div>
                            <div class="x_content" style="overflow:auto; overflow:scroll; height: 45em">
                                <!-- content starts here ////////////////////-->
                                <table class="table jambo_table table-bordered">
                                  <thead>

                                    <th>Fecha de ingreso</th>
                                    <th>Número de Control</th>
                                    <th>Nombre completo</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>RFC</th>
                                    <th>Domicilio</th>
                                    <th>Estado Civil</th>
                                    <th>Número de hijos</th>
                                    <th>Edad y sexo de los hijos</th>
                                    <th>CURP</th>
                                    <th>NSS</th>
                                    <th>Télefono</th>
                                    <!--    2     -->
                                    <th>Correo Electrónico</th>
                                    <th>Último grado de estudios</th>
                                    <th>Área de adscripción</th>
                                    <th>Área funcional</th>
                                    <th>Tipo de sangre</th>
                                    <th>Número de licencia</th>
                                    <th>CUIP</th>
                                    <th>Contacto de amergencia</th>
                                    <th>Categoria</th>
                                    <th>Sueldo</th>
                                    <th>Fecha de formación inicial</th>
                                    <th>Generación</th>
                                    <th>Cartilla militar</th>
                                    <th>Resultado de la Evaluación de Desempeño Académico</th>
                                    <th>Puesto</th>
                                  </thead>
                                  <tbody id="busqueda_tabla">
                                    <?php $ingreso->obtenerIngresos(); ?>
                                  </tbody>
                                </table>
                                <!-- content ends here////////////////////// -->
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
<script type="text/javascript" src="ingresos.js"></script>
