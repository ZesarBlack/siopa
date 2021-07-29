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

        <div class="right_col border border-primary" role="main" style="background-color: #E9E9E9;">

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      <div class="animated flipInY ">
                        <div class="tile-stats" style="border: 2px solid #000000;">
                          <h3>
                              Documentación
                          </h3>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #E9F2FF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel fixed_height_320" style="background: #F0F0F0;">
                                    <div class="x_title">
                                      <h2>Datos Generales </h2>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <h4>Folio</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <h4>Documento</h4>
                                          <select class="form form-control" name="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                          </select>
                                        </div>
                                        <div class="col-md-3">
                                          <h4>Fecha de recepción</h4>
                                          <input type="date" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <h4>hora</h4>
                                          <input type="time" class="form form-control" name="" value="">
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <h4>No. Identificación del Documento</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <h4>Procedencia</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <h4>Fecha termino</h4>
                                          <input type="date" class="form form-control" name="" value="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel fixed_height_320" style="background: #F0F0F0;">
                                    <div class="x_title">
                                      <h2>Datos del remitente </h2>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <div class="row">
                                        <div class="col-md-8">
                                          <h4>Nombre</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <h4>Fecha remitente</h4>
                                          <input type="date" class="form form-control" name="" value="">
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-8">
                                          <h4>Dependencia</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-2">
                                          <h4>Teléfo</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                        <div class="col-md-2">
                                          <h4>Celular</h4>
                                          <input type="text" class="form form-control" name="" value="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel fixed_height_320" style="background: #F0F0F0;">
                                    <div class="x_title">
                                      <h2>Descripción del contenido</h2>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h4>Descripción</h4>
                                          <textarea name="name" style="width: 100%; height: 150px"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5">
                                  <div class="x_panel fixed_height_320" style="background: #F0F0F0;">
                                    <div class="x_title">
                                      <h2>Tiempo de respuesta</h2>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> ordinario
                                      </a>
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> urgente
                                      </a>
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> ordinario dac
                                      </a>
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> urgente dac
                                      </a>
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> ordinario presidencia
                                      </a>
                                      <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> urgente presidencia
                                      </a>
                                    </div>
                                  </div>
                                </div>
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
