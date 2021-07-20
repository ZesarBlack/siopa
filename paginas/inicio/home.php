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
                    <h3>Panel de Inicio</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row" >
                <div class="col-md-12">
                    <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                        <div class="x_content ">

                            <!-- content starts here ////////////////////-->
                          <marquee behavior="alternate"  scrolldelay="1" scrollamount="2" direction="left" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()">
                            <a href="" target="_blank">
                              <img title="Titulo de la entrada" alt="Titulo de la entrada" src="../../images/1.jpg"/>
                            </a>&nbsp;&nbsp;
                            <a href="../../images/1.jpg" target="_blank">
                              <img title="Titulo de la entrada" alt="Titulo de la entrada"  src="../../images/2.jpg" />
                            </a>
                          </marquee>
                            <?php
                            /*
                            if (isset($_SESSION['rol']) && $_SESSION['rol']=="6") {
                              // code...

                              $materia->obtenerMateriasAlumno($_SESSION['id']);
                            }else {
                              // code...
                              $materia->obtenerMaterias();
                            }
                            */
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
