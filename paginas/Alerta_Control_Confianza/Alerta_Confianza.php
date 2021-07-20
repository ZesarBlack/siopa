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
                              Alertas de Vigencia
                          </h3>
                        </div>
                          <select class="form-control has-feedback-left" id="rango" name="rango" style="border: 2px solid #000000;">
                            <option value="0">este mes</option>
                            <option value="1">rango de 1 mes</option>
                            <option value="2">rango de 2 meses</option>
                            <option value="3">rango de 3 meses</option>
                            <option value="4">rango de 4 meses</option>
                          </select>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <table class="table ttable-hover table-condensed table-bordered">
                                  <thead>
                                    <th>id</th>
                                    <th>Número de control</th>
                                    <th>fecha de vigencia</th>
                                    <th>estado de vigencia</th>
                                  </thead>
                                  <tbody id="lista">
                                  </tbody>
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
  </body>
</html>
<script type="text/javascript" src="Alerta.js">

</script>
