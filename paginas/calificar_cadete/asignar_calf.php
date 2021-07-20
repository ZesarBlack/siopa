<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'asignar_calf_back.php';
  $leer = new curso();
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
                              Evaluar registrados al curso
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
                                       <div class="col-md-3 form-group has-feedback">

                                      </div>
                                  </div>


                                <div class="row">
                                  <table class="table">
                                    <thead>
                                      <th>Dirigido para:</th>
                                      <th>Nombre</th>
                                      <th>Generación</th>
                                      <th>Grupo</th>
                                      <th>Periodo</th>
                                      <th>Horas requeridas</th>
                                      <th>Lugar de capacitacion</th>
                                      <th>Dependencia capacitadora</th>
                                    </thead>
                                    <tbody>
                                        <?php $leer -> Leer(); ?>
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
<script type="text/javascript" src="calf.js"></script>
<script type="text/javascript">
 var curso ="";

$(document).on('keyup','#curso', function(event){
	curso = $(this).val();
  enviar(curso);
});

function enviar(curso){
    buscar_datos(curso);
}
</script>
