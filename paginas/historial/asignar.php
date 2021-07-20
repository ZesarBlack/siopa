<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
        include '../../requires/conexion.php';
  $curso = $_POST['curso'];
  if (isset($_POST['curso'])) {
      $curso = $_POST['curso'];
  }else {
    $curso = $_GET['curso'];
  }
  //$query_alumno="SELECT NOMBRE, PATERNO, MATERNO , cedula_id_cedula, cursos_idcurso, calificacion  FROM cedula INNER JOIN cedula_tiene_cursos ON cedula.id_cedula = cedula_tiene_cursos.cedula_id_cedula WHERE cursos_idcurso = $curso";
  $query_alumno="SELECT idcurso, nombre, horas, lugar, calificacion  FROM cursos INNER JOIN cadete_tiene_cursos ON cursos.idcurso = cadete_tiene_cursos.cursos_idcurso WHERE cadete_idCadete = $curso";
  $res_query = $conn->query($query_alumno);

  $sql= "SELECT AVG(calificacion) FROM cadete_tiene_cursos WHERE cadete_idCadete = $curso";
  $res = $conn->query($sql);
  //echo $query_alumno;
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
                             Historial de calificaciones
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
                                  <div class="col-xs-4 tile_stats_count">
                                  </div>
                                  <div class="col-xs-4">
                                    <div class="count">


                                    </div>
                                  </div>
                                  <div class="col-xs-4 tile_stats_count">
                                  </div>
                                </div>
                                <div class="row">

                                </div>
                                <div class="row">
                                  <table class="table table-hover table-condensed table-bordered table-striped">
                                    <tr>
                                      <td>Id curso</td>
                                      <td>Nombre del curso</td>
                                      <td>Horas</td>
                                      <td>Calificación</td>

                                    </tr>
                                    <?php
                                      while($ver=mysqli_fetch_row($res_query)){
                                     ?>
                                    <tr>
                                      <td><?php echo $ver[0] ?></td>
                                      <td><?php echo $ver[1] ?></td>
                                      <td><?php echo $ver[2] ?></td>
                                      <td><?php echo $ver[4] ?></td>
                                      <td>
                                        <form action="../pdf/pdf.php" method="post">
                                          <input type="text" name="cadete" value="<?php echo $curso ?>" hidden>
                                          <input type="text" name="id" value="<?php echo $ver[0] ?>"hidden>
                                          <input type="text" name="nombrec" value="<?php echo $ver[1] ?>"hidden>
                                          <input type="text" name="calificacion" value="<?php echo $ver[4] ?>"hidden>
                                          <button type="submit" name="button">Generar Constancia</button>
                                        </form>
                                      </td>
                                    </tr>

                                    <?php
                                      }
                                      $row=mysqli_fetch_row($res)
                                     ?>
                                  </table>
                                </div>
                                <div class="row">
                                  <p> <h4>Promedio: <?php print_r($row[0]) ?></h4> </p>
                                </div>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    <script type="text/javascript" src="prueba.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
