<!DOCTYPE html>
<html lang="en">
  <?php
  require '../../requires/head2.php';
    include 'calendario_back.php';
    if (isset($_POST['id'])) {
      $idusr = $cita->obtenerUsuario($_POST['id']);
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
                        <h3>
                            Calendarizar prueba de confianza: <?php if (isset($idusr)) {
                              // code...
                               echo $nombre = $idusr[1]." ".$idusr[2]." ".$idusr[3];
                            }   ?>
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->

                                <form class="" action="calendario_back.php" method="post">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="cita">

                                        <label>Tipo de prueba</label>
                                        <div class="row-md-4" style="margin: 12px;">
                                          <input type="text" name="tipo" id="tipo" value="prueba de confianza" style='font-size: 12pt;
                                          font-weight: bold; color: gray; text-align: center;' required>
                                        </div>

                                        <label>Fecha</label>
                                        <div class="row-md-4" style="margin: 12px;">
                                          <input type="date" name="fecha" id="fecha" value="" style='font-size: 12pt;
                                          font-weight: bold; color: gray; text-align: center;'>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="cita" >
                                        <label>Lugar</label>
                                        <div class="row-md-4" style="margin: 12px;">
                                          <input type="text" name="lugar" id="lugar" value="" style='font-size: 12pt;
                                          font-weight: bold; color: gray; text-align: center;' required>
                                        </div>
                                        <label>Hora</label>
                                        <div class="row-md-4" style="margin: 12px;">
                                          <input type="time" name="hora" id="hora" value="" style='font-size: 12pt;
                                          font-weight: bold; color: gray; text-align: center;' required>
                                        </div>
                                      </div>
                                      <input type="text" name="nombre" value="<?php echo  $nombre?>" hidden>
                                      <input type="text" name="id_usr" value="<?php echo $idusr[0]; ?>" hidden>
                                      </div>

                                  </div>
                                  <button type="submit" name="button">Citar aspirante</button>
                                </form>
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
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
