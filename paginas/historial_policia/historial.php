<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'historial_back.php';

  if (isset($_POST['cuip'])) {
      $cuip = $_POST['cuip'];
      //echo $curso;
  }else {
    $cuip = $_GET['cuip'];
  }

  //$sql= "SELECT AVG(calf) FROM cursos_policias WHERE control_pol = '$curso'";
  //$res = $conn->query($sql);
  //echo $query_alumno;
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
                                 Historial de calificaciones
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
                                <div class="row tile_count">
                                  <div class="col-xs-4 tile_stats_count">
                                  </div>
                                  <div class="col-xs-4">
                                    <div class="count">


                                    </div>
                                  </div>
                                  <div class="col-xs-4 tile_stats_count">
                                  </div>
                                </div>
                                <div class="row">

                                </div>
                                <div class="row">
                                  <table class="table table-hover table-condensed table-bordered table-striped">
                                    <thead>
                                      <th>ID DEL CURSO</th>
                                      <th>Nombre</th>
                                      <th>Horas</th>
                                      <th>Lugar</th>
                                      <th>Calificación</th>
                                    </thead>
                                    <?php $calificacion->obtenerCursos($cuip); ?>
                                  </table>
                                </div>
                                <div class="row">
                                  <p> <h4>Promedio actual: <?php echo  $calificacion->obtenerPromedio($cuip); ?></h4> </p>
                                </div>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
