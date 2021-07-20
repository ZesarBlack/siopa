<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'detalles_back.php';
  $cadete = new Cadete();
  if (isset($_POST['id'])) {
    // code...
  $detalles = $cadete->detallesCadete($_POST['id']);
  }
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
                            Detalles del elemento <?php echo $detalles[6]; ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <div class="col-md-6 col-sm-12  ">
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <h2>Información del elemento</h2>
                                      <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <input type="text" name="id_cad" id="id_cad" value="<?php echo $detalles[0];  ?>" hidden readonly>
                                      <br>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Folio de registro</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[3]; ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Tipo de ingreso</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[2]; ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nombre completo</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[6]." ".$detalles[5]." ".$detalles[4] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Fecha de nacimiento</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[7] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Género</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[9] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">CURP</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[10] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Correo electrónico</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[11] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Teléfono movil 1</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[12] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Teléfono movil 2</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[13] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Teléfono movil 3</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[14] ?></label>
                                      </div>
                                      <?php
                                       if (isset($detalles[19])) {
                                        // code...
                                        echo '
                                        <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Dependencia anterior</label>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">'.$detalles[19].'</label>
                                        </div>
                                        ';
                                      }
                                      ?>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Domicilio</label>
                                      <label class="control-label col-md-5 col-sm-5 col-xs-5"><?php echo "C. ".$detalles[20].", ".$detalles[24].", ".$detalles[25].", ".$detalles[26] ?></label>
                                      </div>
                                      <div class="form-group row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Códifo postal</label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><?php echo $detalles[23] ?></label>
                                      </div>

                                      <div class="ln_solid"></div>
                                      <div class="form-group row">
                                      <div class="col-md-9 offset-md-3">
                                      <button type="submit" class="btn btn-primary" onclick="redireccionar()">
                                        <i class="fa fa-mail-reply"></i>
                                        regresar
                                      </button>
                                      </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!------------------------------------------------------------------------------------------>
                                <div class="col-md-6 col-sm-12  ">
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <h2> Documentos entregados</h2>
                                      <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      </div>
                                    <div class="x_content">
                                      <table class="table ttable-hover table-condensed table-bordered">
                                        <thead>
                                          <th>Nombre del documento</th>
                                          <th>Liga</th>

                                        </thead>
                                        <tbody>
                                          <?php $cadete->obtenerDocs($detalles[10]); ?>
                                        </tbody>
                                      </table>
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
<script type="text/javascript" src="detalles.js">
</script>
