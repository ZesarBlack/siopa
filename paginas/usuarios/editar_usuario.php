<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
include '../../requires/conexion.php';
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
                        <h3>
                            Editar de usuario
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <?php
                                $idUsuario=$_GET['idUsuario'];
                                $buscar=mysqli_query($conn,"SELECT * FROM usuarios_cat WHERE idUsuario='$idUsuario'");
                                //$conn->query("SET CHARACTER SET 'utf8'");
                                $fila=mysqli_fetch_array($buscar);
                                $conn->query("SET CHARACTER SET 'utf8'");
                                $nom= $fila["nombre"];
                                $pat= $fila["ap_paterno"];
                                $mat= $fila["ap_materno"];
                                $usuario= $fila["usr"];
                                $contras= $fila["pass"];
                                $email= $fila["email"];
                                //$rol= $fila["rol"];
                               $create_time=$fila["create_time"];
                               ?>

                                <form  method="POST" action="editar_usuarioback.php">

                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">
                                        <input  type="text" class="form-control has-feedback-left"
                                                 id="Nombre" placeholder="Nombre	" name="nom" value="<?php echo $nom;?>" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                              Nombre(s)
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                                 id="ApPat" placeholder="Apellido Paterno	" name="pat" value="<?php echo $pat;?>" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                Apellido Paterno
                                                <div class="help-info"></div>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="ApMat" placeholder="Apellido Materno" name="mat" value="<?php echo $mat;?>" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Apellido Materno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                  </div>



                                  <div class="row tile_count">
                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="usuario" placeholder="Usuario" name="usuario" value="<?php echo $usuario; ?>" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;'>
                                           Usuario
                                           <div class="help-info"></div>
                                           <span class="fa fa-user form-control-feedback left" aria-hidden="true">
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
                                                 id="contras" placeholder="Nueva Contraseña" name="contras" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                                  Confirmar Contraseña
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-key form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                          <div class="col">
                                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal" style=" width:5%;" onclick="mostrarContrasena()">
                                              mostrar
                                            </button>
                                          </div>
                                  </div>

                                  <div class="row tile_count">
                                       <div class="col-md-6 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                                 id="email" placeholder="Correo" name="email" value="<?php echo $email;?>" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;'>
                                              Correo Electrónico
                                              <div class="help-info"></div>
                                              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>


                                     <div class="row tile_count">
                                        <div class="col-xs-10 tile_stats_count">
                                                  <div style="text-align:right;">
                                                    <input type="submit"  name="guardar" id="guardar" value="Editar Usuario" style='font-size: 12pt;
                                                     font-weight: bold; color: black; text-align: center;'>
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
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="usuario.js">

</script>
