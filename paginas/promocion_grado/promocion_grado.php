<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'promocion_grado_back.php';
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
                            Promoción de grado
                          </h3>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                          <div class="col-sm-4">
                              <input id="control" placeholder="Buscar registros por CUIP" class="form form-control" onkeyup="mayus(this)" value="" name="control" type="text" style='font-size: 12pt;
                              font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                          </div>

                            <div class="x_content" style="overflow:auto; overflow:scroll; height: 50em">
                                <!-- content starts here ////////////////////-->
                                <table class="table table-striped jambo_table table-bordered">
                                  <thead>
                                    <th>Nombre completo</th>
                                    <th>CUIP</th>
                                    <th>Número de Control</th>
                                    <th>Número de Convocatoria</th>
                                    <th>Folio de promoción</th>
                                    <th>Fecha de de Ingreso al Instituto</th>
                                    <th>Categoría Actual</th>
                                    <th>Antigüedad en la categoria</th>
                                    <th>Categoría a la que aspira</th>
                                    <th>Documentación completa</th>
                                    <th>Estatus ante la Unidad de Asuntos Internos</th>
                                    <th>Estatus ante la Comisión del SPCP</th>
                                    <th>Estatus ante el Consejo Honor y Justicia</th>
                                    <th>Estatus ante la Contraloría Municipal</th>
                                    <th>Fecha de aplicación de examen</th>
                                    <th>Resultado del examen</th>
                                    <th>No. de oficio de comisión para la evaluación de control de confianza</th>
                                    <th>Fecha de programación de la evaluación </th>
                                    <th>Resultado de la evaluación</th>
                                    <th>Número de Oficio del Centro de Evaluación </th>
                                    <th>Fecha de emisión de hoja de resultado.</th>
                                    <th>Número de sesión de la Comisión del SPCP en que se aprueba la entrega de la Constancia de Grado</th>
                                    <th>Fecha de emisión de la Constancia de Grado.</th>
                                  </thead>
                                  <tbody id="lista">
                                    <?php $certificado->obtenerRegistros(); ?>
                                  </tbody>
                                </table>
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
<script type="text/javascript" src="promocion.js"></script>
