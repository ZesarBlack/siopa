<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'home_back.php';
  $materia = new Materias();
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
                        Control de alertas
                        <?php
                            //$fecha_actual = date("d-m-Y");
                            //echo "<br>";
                            //sumo 1 año
                            //echo date("d-m-Y",strtotime($fecha_actual."+ 1 year"));
                            //echo "<br>";
                            //resto 1 año
                            //echo date("d-m-Y",strtotime($fecha_actual."- 1 year"));
                         ?>
                    </h3>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12">
                    <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                       <div class="x_content ">
                            <!-- content starts here ////////////////////-->
                            <div class="row">
                              <h3>
                                <p>Examen de desempeño</p>
                              </h3>
                            </div>
                            <div class="row">
                              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
                                <div onclick="mensaje()" class="tile-stats"  style="background-color:#29BF2B">
                                  <div class="icon"><i class="fa fa-check"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>Sin riesgo</h3>
                                  <p style="color:#FFFFFF";>recientemente renovado</p>
                                </div>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 " >
                                <div class="tile-stats" style="background-color:#E7E11B;">
                                  <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>No necesario</h3>
                                  <p style="color:#FFFFFF";>a un año de vencer</p>

                                </div>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6">
                                <div class="tile-stats" style="background-color: #FF3C03;">
                                  <div class="icon"><i class="fa fa-history"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>Urgente</h3>
                                  <p style="color:#FFFFFF";>menos de un mes para vencer</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <h3>
                                <p>Prueba de confianza</p>
                              </h3>
                            </div>
                            <div class="row">
                              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
                                <div onclick="mensaje()" class="tile-stats"  style="background-color:#29BF2B">
                                  <div class="icon"><i class="fa fa-check"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>Sin riesgo</h3>
                                  <p style="color:#FFFFFF";>recientemente renovado</p>
                                </div>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 " >
                                <div class="tile-stats" style="background-color:#E7E11B;">
                                  <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>No necesario</h3>
                                  <p style="color:#FFFFFF";>a un año de vencer</p>

                                </div>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6">
                                <div class="tile-stats" style="background-color: #FF3C03;">
                                  <div class="icon"><i class="fa fa-history"></i></div>
                                  <div class="count" style="color:#FFFFFF">179</div>
                                  <h3 style="color:#FFFFFF";>Urgente</h3>
                                  <p style="color:#FFFFFF";>menos de un mes para vencer</p>
                                </div>
                              </div>
                            </div>

                            <?php

                            if (isset($_SESSION['rol']) && $_SESSION['rol']=="6") {
                              // code...

                              $materia->obtenerMateriasAlumno($_SESSION['id']);
                            }else {
                              // code...
                              $materia->obtenerMaterias();
                            }
                            
                            ?>
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
