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
                        <h3>
                            Registro Médico
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form name="form2" method="POST" action="guardar.php">

                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="folio" placeholder="Folio" name="folio" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Folio
                                              <div class="help-info"></div>
                                              <span class="fa fa-search form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="date" class="form-control has-feedback-left"
                                               id="fecha" placeholder="fecha" name="fecha" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Fecha
                                                <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="estado" placeholder="Estado" name="estado" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Estado
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                  </div>

                                  <div class="row tile_count">
                                       <div class="col-md-8 col-sm-2 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="nombre" placeholder="Nombre" name="nombre" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Nombre Personal
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="control" placeholder="Núm. Control" name="control" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Número de Control
                                                <div class="help-info"></div>
                                                <span class="fa fa-indent form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="peso" placeholder="Peso" name="peso" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Peso
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="esta" placeholder="Estatura" name="esta" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Estatura
                                                <div class="help-info"></div>
                                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="imc" placeholder="IMC" name="imc" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  IMC
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                  </div>

                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="tatu" placeholder="Tatuajes" name="tatu" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Tatuajes
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="perfo" placeholder="Perforaciones" name="perfo" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Perforaciones
                                                <div class="help-info"></div>
                                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="lact" placeholder="Lactando" name="lact" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Lactando
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="vision" placeholder="Visión" name="vision" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Visión
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="obser" placeholder="Obs.Visión" name="obser" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Observaciones Visión
                                                <div class="help-info"></div>
                                                <span class="fa fa-eye form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="dalto" placeholder="Daltonismo" name="dalto" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Daltonismo
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                             <input type="text" class="form-control has-feedback-left"
                                                   id="obserd" placeholder="Obs.Daltonismo" name="obserd" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;'>
                                                    Observaciones Daltonismo
                                                    <div class="help-info"></div>
                                                    <span class="fa fa-eye form-control-feedback left" aria-hidden="true">
                                                    </span>
                                            </div>
                                      </div>

                                      <div class="row tile_count">
                                           <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="oido" placeholder="Oído" name="oido" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Oído
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                             <input type="text" class="form-control has-feedback-left"
                                                   id="obsero" placeholder="Obs.Oído" name="obsero" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;'>
                                                    Observaciones Oído
                                                    <div class="help-info"></div>
                                                    <span class="fa fa-eye form-control-feedback left" aria-hidden="true">
                                                    </span>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                               <input type="text" class="form-control has-feedback-left"
                                                     id="loco" placeholder="Locomotor" name="loco" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;'>
                                                      Locomotor
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                              </div>
                                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                                                 <input type="text" class="form-control has-feedback-left"
                                                       id="obserl" placeholder="Obs.Locomotor" name="obserl" style='font-size: 12pt;
                                                        font-weight: bold; color: red; text-align: center;'>
                                                        Observaciones Locomotor
                                                        <div class="help-info"></div>
                                                        <span class="fa fa-eye form-control-feedback left" aria-hidden="true">
                                                        </span>
                                                </div>
                                          </div>


                                     <div class="row tile_count">
                                        <div class="col-xs-10 tile_stats_count">
                                                  <div style="text-align:center;">
                                                     <button type="submit" name="guardar" id="guardar" class="btn btn-primary" style="background-color:green; width:20%;  ">Guardar</button>
                                        </div>
                                      </div>
                                      </div>
                                </div>
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
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
