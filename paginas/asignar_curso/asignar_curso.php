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
                              Registro de elementos a cursos
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
                                                  <h4>Asignar curso a elementos</h4>
                                                </div>
                                              </div>
                                              <div class="col-xs-4 tile_stats_count">
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="row">
                                                <form class="" action="asignar.php" method="post">
                                                  <div class="col-md-2">
                                                    <input placeholder="Número del elemento" class="form-control has-feedback-left" type="text" name="nombre" id="nombre" style="font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;" required>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <input placeholder="Nombre del Curso" class="form-control has-feedback-left" type="text" name="curso" id="curso" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;' required>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <button type="submit" name="button">registrar en el curso</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <table class="table">
                                                <tbody id="datos">
                                                </tbody>
                                              </table>
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
<script type="text/javascript" src="asignar_curso.js"></script>
