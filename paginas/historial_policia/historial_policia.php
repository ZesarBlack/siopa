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
                             Historial de Policia
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
                                   <form class="" action="historial.php" method="post">
                                     <div class="col-md-4 col-sm-4 col-sm-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="curso" placeholder="Número de control" name="cuip" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              CUIP del Policia
                                              <div class="help-info"></div>
                                              <span class="fa fa-object-group form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                       <div class="col-md-4 col-sm-4 col-sm-4 form-group has-feedback">
                                              <input type="submit"  name="button" id="button" value="Ver detalles" style='font-size: 12pt;
                                              font-weight: bold; color: black; text-align: center;'>
                                       </div>
                                    </form>
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
      </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
 var curso ="";

$(document).on('keyup','#curso', function(event){
	curso = $(this).val();
  enviar(curso);
  //alert(curso);
});

function enviar(curso){
    buscar_datos(curso);
}
</script>
