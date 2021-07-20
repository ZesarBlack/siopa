<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'clase_curso.php';
  $cursos = new curso();
  $curso=$cursos->obtnerCurso($_GET['curso']);
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
                            Editar de curso
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form action="editarCurso_back.php" method="POST">
                                  <div class="form-row" style="margin-left:2em; margin-right:2em;">
                                    <div class="form-group col-md-6">
                                      <label for="nombre">Nombre del profesor</label>
                                       <input type="text" class="form"  name="" value="">
                                    </div>
                                  </div>
                                    <div class="form-row" style="margin-left:2em; margin-right:2em;">
                                      <div class="form-group col-md-6">
                                        <label for="nombre">Nombre del Curso o Capacitación</label>
                                        <input class="form-control" type="text" name="NombreCurso" value="<?php echo $curso[3]; ?>"  required >
                                      </div>
                                    </div>
                                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                      <div class="form-group col-md-6">
                                        <label for="FechaInicio"> Fecha de Inicio </label>
                                        <input type="date" class="form-control" name="FechaInicio" value="<?php echo $curso[5]; ?>" required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="FechaFin">Fecha de Finalización</label>
                                        <input type="date" class="form-control" name="FechaFin" value="<?php echo $curso[6]; ?>" required>
                                      </div>
                                    </div>
                                    <div class="form-row"  style="margin-left:1em; margin-right:1em;">
                                      <div class="form-group col-md-6">
                                        <label for="Duracion">Duración en Horas</label>
                                          <input type="number" class="form-control" name="Horas" value="<?php echo $curso[7] ?>" required>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label for="Creditos">Lugar de impartición</label>
                                          <input type="text" class="form-control" name="Creditos" value="<?php echo $curso[8] ?>" required>
                                      </div>
                                    </div>
                                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                      <div class="form-group col-md-6">
                                          <label for="Entidad">Entidad encargada de impartir</label>
                                          <input type="text" class="form-control" name="Entidad" value="<?php echo $curso[9] ?>" required>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label for="Observaciones"> Observaciones</label>
                                          <input type="text" class="form-control" name="Observaciones" value="<?php echo $curso[10] ?>" required>
                                      </div>
                                    </div>

                                    <div class="form-group" style="margin-left:2em; margin-right:2em;">
                                        <label for="FileNAme"> Oficio validación SESNSP</label>
                                        <input type="file" name="FileName" id="NombreCurso">
                                    </div>
                                    <?php

                                      if (isset($_GET['curso'])) {
                                        $idCurso  = $_GET['curso'];
                                    }else{
                                      $idCurso = 0;
                                    }
                                    echo "<input type='hidden' name='idCurso' value='$idCurso'>";
                                    ?>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col sm-12 text-center"><button class="btn btn-primary" type="submit">Registrar</button></div>

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

         <!-- </div>
        </div>-->

    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
