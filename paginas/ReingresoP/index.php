<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  		include '../../requires/conexion.php';
      include 'cambiarE_back.php';
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
                        <h3>
                            Control del Personal
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <div id="datos">

                                </div>
                                <table class="table table-hover table-condensed table-bordered">
                                  <tr>
                                    <td>Número de control</td>
                                    <td>Nombre</td>
                                    <td>Apellido Paterno</td>
                                    <td>Apellido Materno</td>
                                    <td>Dirección</td>
                                    <td>Número Casa</td>
                                    <td>Número Móvil</td>
                                    <td>Correo</td>
                                    <td>Estatus actual</td>
                                    <td>Estatus</td>
                                    <td>Estado actual</td>
                                    <td>Estado</td>
                                    <td>Situación Actual</td>
                                  </tr>
                                  <tr>
                                    <?php $datos=$persona->obtenerPersona();?>
                                  </tr>
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
    <script type="text/javascript" src="persona.js"></script>
    <link rel="stylesheet" href="tabla.css">
  </body>
</html>
