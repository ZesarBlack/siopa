<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'asignar_curso_back.php';
  if (isset($_POST['curso'])) {
      $curso = $leer->infoCurso($_POST['curso']);
  }
  if (isset($_GET['curso'])) {
      $curso = $leer->infoCurso($_GET['curso']);
  }

  ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Formación Inicial</span></a>
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
                            Registro de Policias al curso
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->

                                <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>NOMBRE</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php echo $curso[3]; ?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>GENERACIÓN</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php  echo $curso[4];?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>GRUPO</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php   echo $curso[5];?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>PERIODO</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php  echo $curso[6];?></h2></label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>HORAS</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php  echo $curso[10];?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>LUGAR</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php  echo $curso[11];?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>ENTIDAD</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php echo $curso[12];?></h2></label>
                                    </div>
                                    <div class=" row">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><strong>OBSERVACIONES</strong></h2></label>
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2><?php  echo $curso[13];?></h2></label>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <br>
                                <div class="row" style="border-top: 3px;">
                                 <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Registrar cadetes al curso</button>
                                </div>
                                <!-- Modal////////////////////-->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <!-- Modal body -->
                                          <div class="modal-body">

                                              <form action="asignar_curso_back.php" method="POST">
                                                  <div class="row" style="margin-top:2em;">
                                                      <div class="col-sm-1"></div>
                                                      <div class="col-sm-3">Nombre del cadete</div>
                                                      <div class="col-sm-7">
                                                          <input id="cuip" name="cuip" type="text" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                                      </div>
                                                        <input type="text" id="id_curso" name="id_curso" value="<?php echo $curso[0]; ?>" hidden readonly>
                                                  </div>
                                                  <div class="row" style="margin-top:2em;">
                                                    <table class="table">
                                                      <tbody id="datos">
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-primary" >Registrar</button>
                                                  </div>
                                               </form>
                                          </div>
                                          <!-- Modal footer -->

                                      </div>
                                  </div>
                                </div>
                                <!-- /Modal////////////////////-->
                                <table class="table">
                                  <thead>
                                    <td>NÚMERO DE CONTROL</td>
                                    <td>CUIP</td>
                                    <td>NOMBRE COMPLETO</td>
                                    <td>CURP</td>
                                    <td>TIPO DE EMPLEO</td>
                                  </thead>
                                  <tbody>
                                    <?php
                                    if (isset($_GET['curso'])) {
                                      $leer->obtenerRegistrados($_GET['curso']);
                                    }
                                    if (isset($_POST['curso'])) {
                                      $leer->obtenerRegistrados($_POST['curso']);
                                    }
                                     ?>
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
<script type="text/javascript" src="asignar_curso.js"></script>
