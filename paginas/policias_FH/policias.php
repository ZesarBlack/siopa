<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'policias_back.php';
    $policia = new policia();
  if (isset($_POST['ncontrol'])) {

    $ncontrl=$_POST['ncontrol'];
        ////echo $ncontrl;
    $lista = $policia->obtenerPolicia($ncontrl);
  }
  //$policia = new policia();

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
                            Información particular
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                    <div class="x_content">
                                      <h3> Nombre del Policia: <?php echo $lista->{'nombre'}; ?></h3>
                                      <div class="row">
                                        <h3>Datos Ofiales</h3>
                                        <div class="col-md-2 col-sm-3 col-xs-12 profile_left">
                                          <ul class="list-unstyled user_data">
                                            <li>
                                              <i class="fa fa-briefcase user-profile-icon"></i> Tipo de empleado
                                            </li>
                                            <li>
                                              <i class="fa fa-briefcase user-profile-icon"></i> Número de control
                                            </li>
                                            <li>
                                              <i class="fa fa-briefcase user-profile-icon"></i> Número de placa
                                            </li>
                                            <li>
                                              <i class="fa fa-briefcase user-profile-icon"></i> Sector
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                          <li>
                                            <?php echo $lista->{'tipo_empleado'}; ?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'no_control'}; ?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'no_placa'};?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'sector'};?>
                                          </li>
                                        </div>
                                      </div>
                                      <div class="row">
                                      <h3>Datos Personales</h3>
                                        <div class="col-md-2 col-sm-3 col-xs-12 profile_left">
                                          <li>
                                              <iclass="fa fa-map-marker user-profile-icon"></i> Fecha de nacimiento
                                          </li>
                                          <li>
                                            <iclass="fa fa-map-marker user-profile-icon"></i> Entidad
                                          </li>
                                          <li>
                                              <iclass="fa fa-map-marker user-profile-icon"></i> Municipio
                                          </li>
                                          <li>
                                              <iclass="fa fa-map-marker user-profile-icon"></i> RFC
                                          </li>
                                          <li>
                                              <iclass="fa fa-map-marker user-profile-icon"></i> CURP
                                          </li>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-12 profile_left">
                                          <li>
                                            <?php echo $lista->{'nacimiento'};?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'entidad'};?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'entidad'};?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'rfc'};?>
                                          </li>
                                          <li>
                                            <?php echo $lista->{'curp'};?>
                                          </li>
                                        </div>
                                      </div>
                                    </div>
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
