<!DOCTYPE html>
<?php
include 'docentes_back.php';
$docente = new Docente();
if (isset($_POST['nombre']) && isset($_POST['apellido_p']) && isset($_POST['apellido_m'])) {
  $docente->registrar($_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m']);
}
 ?>
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
                        <h3>
                            Registro de docentes
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form class="" action="" method="post">
                                  nombre
                                  <input type="text" name="nombre" value="" required>
                                  Apellido paterno
                                  <input type="text" name="apellido_p" value="" required>
                                  Apellido materno
                                  <input type="text" name="apellido_m" value="" required>
                                  <button type="submit" name="button">registrar</button>
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
    <script type="text/javascript" src="catalogo.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
