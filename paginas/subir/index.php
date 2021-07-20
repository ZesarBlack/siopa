<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php'; ?>
  <head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
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
                            Subir documentos
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
																<!--formulario para insertar el nombre del susuario-->

																<form  action="uploads.php" method="post">
                                  <!--
                                  <p>Selecciona tipo de elemento</p>
                                  <select class="" id="tipo_elemento" name="tipo">
                                    <option value="">Selecciones una opción</option>
                                    <option value="policia">Policia</option>
                                    <option value="cadete">Cadete</option>
                                  </select>
                                -->
																	<label for=""> inserte el CURP</label>
																	<input type="text" name="nombre" id="nombre">
																</form>
																<!--zona para cargar archivos de forma dinamica-->
                                <div id="dropzone" class="dropzone" hidden>
                          				<div class="dz-message needsclick">
                          				Arrastre su archivo aqui o de click para seleccionarlo.
                          				</div>
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
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="js/dropzone.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
