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
                              Registro de usuarios
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
                                <form name="form2" method="POST" action="crear.php">

                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                              id="nombre" placeholder="Nombre(s)" name="nombre" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Nombre(s)
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                               id="paterno" placeholder="Apellido Paterno" name="paterno" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required>
                                                Apellido Paterno
                                                <div class="help-info"></div>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                                 id="materno" placeholder="Apellido Materno" name="materno" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' required>
                                                  Apellido Materno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                  </div>



                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="usuario" onkeyup="sanitizar(this)" placeholder="Usuario" name="usuario" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Usuario
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" onclick="mostrarContrasena()" aria-hidden="true">
                                              </span>
                                      </div>
                                    <!--  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="password" class="form-control has-feedback-left"
                                               id="contra" placeholder="Contraseña" name="contra" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;'>
                                                Contraseña
                                                <div class="help-info"></div>
                                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>    -->
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="password" class="form-control has-feedback-left"
                                                 id="contras" onkeyup="sanitizar(this)" placeholder="Confirmar Contraseña" name="contras" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' required>
                                                  Contraseña
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-eye form-control-feedback left" aria-hidden="true">
                                                  </sspan>
                                          </div>
                                          <div class="col">
                                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal" style=" width:5%;" onclick="mostrarContrasena()">
                                              mostrar
                                            </button>
                                          </div>
                                  </div>


                                  <div class="row tile_count">
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                          <label>Rol</label>
                                          <div class="">
                                          </div>
                                        </div>
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Administrador">Administrador</label>
                                         <input type="radio" name="registro" id="registro" value="1"> <?php /*if($regi == "Si") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>

                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Academia">Administrador de cursos</label>
                                         <input type="radio" name="registro" id="registro" value="4"> <?php /*if($regi == "No") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Academia">Reclutador</label>
                                         <input type="radio" name="registro" id="registro" value="8"> <?php /*if($regi == "No") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Academia">Médico</label>
                                         <input type="radio" name="registro" id="registro" value="5"> <?php /*if($regi == "No") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Academia">Instructor de física</label>
                                         <input type="radio" name="registro" id="registro" value="6"> <?php /*if($regi == "No") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                         <label for="Academia">Control examen de confianza</label>
                                         <input type="radio" name="registro" id="registro" value="9"> <?php /*if($regi == "No") echo "checked"; */?>
                                         <div class="">
                                         </div>
                                     </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-6 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="email" onkeyup="sanitizarCorreo(this)" class="form-control has-feedback-left"
                                              id="correo" placeholder="Correo" name="correo" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Correo Electrónico
                                              <div class="help-info"></div>
                                              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="date" class="form-control has-feedback-left"
                                               id="fecha" placeholder="Fecha Creación" name="fecha" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required>
                                                Fecha Creación
                                                <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                  </div>


                                     <div class="row tile_count">
                                        <div class="col-xs-10 tile_stats_count">
                                                  <div style="text-align:right;">
                                                    <input type="submit"  name="guardar" id="guardar" value="Crear Usuario" style='font-size: 12pt;
                                                     font-weight: bold; color: black; text-align: center;' required>
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
<script type="text/javascript" src="usuario.js">
</script>
