<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'asignar_calf_back.php';
  if (isset($_POST['curso'])) {
    $idcurso = $_POST['curso'];
    //$curso->obtenerRegistrados($_POST['curso']);
    $infoCurso = $curso->infoCurso($_POST['curso']);
  }else {
    $idcurso = $_GET['curso'];
    //$curso->obtenerRegistrados($_GET['curso']);
    $infoCurso = $curso->infoCurso($_GET['curso']);
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
            <?php require '../../requires/sidebar.php'  ?>

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
                                Calificar cadetes
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
                                              <div class="col-xs-6">
                                                <div class="count">
                                                  <h3>Asignar Calificacion del curso:</h3>
                                                </div>
                                                <div class="count">
                                                  <h2><?php echo $infoCurso['nombre']."  Generación ".$infoCurso['generacion']."  Grupo ".$infoCurso['grupo']."  Periodo ".$infoCurso['periodo'] ?></h2>
                                                </div>
                                              </div>
                                              <div class="col-xs-4 tile_stats_count">
                                              </div>
                                            </div>
                                            <div class="row">
                                              <form class="" action="asignar_calf_back.php" method="post">
                                                <input type="text" name="id_curso" id="id_curso" value="<?php echo $idcurso ?>" hidden>
                                                <div class="row tile_count">
                                                     <div class="col-md-4 col-sm-2 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                            id="nombre" placeholder="CUIP" name="nombre" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;'>
                                                            Seleccione el cadete por su CUIP
                                                            <div class="help-info"></div>
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                            </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="calificacion" placeholder="Calificación" name="calificacion" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center;' required>
                                                              Ingrese la calificación final
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-indent form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                      </div>
                                                </div>
                                                  <button type="submit" >Registrar Calificación</button>
                                              </form>


                                              <div class="row">
                                                <table class="table table-hover table-condensed table-bordered">
                                                  <thead>
                                                    <th>Número de control</th>
                                                    <th>CUIP</th>
                                                    <th>Nombre completo</th>
                                                    <th>CURP</th>
                                                    <th>Tipo de empleado</th>
                                                    <th>Calificación</th>
                                                  </thead>
                                                  <form action="asignar_calf_back.php" method="post">
                                                    <?php
                                                    if (isset($_POST['curso'])) {
                                                      $curso->obtenerRegistrados($_POST['curso']);;
                                                    } else {
                                                      $curso->obtenerRegistrados($_GET['curso']);;
                                                    }

                                                    ?>
                                                   </form>
                                                </table>
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

    <script type="text/javascript" src="calf.js">
      document.getElementById("darBaja").onclick = function() {alert("HOLA")};

      function myFunction() {
        alert("HOLA");
      }
      document.getElementById("td").onclick=function(){myFunction()}
    </script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
