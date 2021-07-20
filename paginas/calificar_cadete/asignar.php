<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
        include '../../requires/conexion.php';
  //$curso = $_POST['curso'];
  if (isset($_POST['curso'])) {
      $curso = $_POST['curso'];
  }else {
    $curso = $_GET['curso'];
  }
  $query_alumno="SELECT c.nombre, c.a_paterno, c.a_materno , cadete_idCadete, cursos_idcurso, calificacion, cu.nombre FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cursos_idcurso = $curso";
  $query_curso = "SELECT * FROM cursos WHERE idcurso = $curso";
  //$nombre_c = $conn->query($query_curso);
  //$nombre_curso=mysqli_fetch_row($nombre_c)
  //echo $query_alumno;
  $res_query = $conn->query($query_alumno);
  $res_query2= $conn->query($query_curso);
  $ver_nombre=mysqli_fetch_row($res_query2)
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
                        <div class="animated flipInY ">
                          <div class="tile-stats" style="border: 2px solid #000000;">
                            <h3>
                                Calificar cadetes
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
                                              <div class="col-xs-6">
                                                <div class="count">
                                                  <h3>Asignar Calificacion del curso:</h3>
                                                </div>
                                                <div class="count">
                                                  <h2><?php echo $ver_nombre[3]."  Generación ".$ver_nombre[4]."  Grupo ".$ver_nombre[5]."  Periodo ".$ver_nombre[6] ?></h2>
                                                </div>
                                              </div>
                                              <div class="col-xs-4 tile_stats_count">
                                              </div>
                                            </div>
                                            <div class="row">
                                              <form class="" action="calf_back.php" method="post">

                                                <div class="row tile_count">
                                                     <div class="col-md-4 col-sm-2 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                            id="nombre" placeholder="Id cadete" name="nombre" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;'>
                                                            Seleccione el cadete por su id
                                                            <div class="help-info"></div>
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                            </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="calificacion" placeholder="Calificación" name="calificacion" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center;' required>
                                                              Ingrese la calificación final
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-indent form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                      </div>
                                                </div>

                                                <div class="row tile_count">
                                                   <div class="col-xs-10 tile_stats_count">
                                                             <div style="text-align:left;">
                                                               <input type="text" name="id_curso" id="id_curso" value="<?php echo $curso?>" hidden>
                                                               <input type="submit"  name="button" id="button" value="Registrar Calificación" style='font-size: 12pt;
                                                                font-weight: bold; color: black; text-align: center;'>
                                                   </div>
                                                  </div>
                                                </div>
                                              </form>


                                            <div class="row">
                                              <table class="table table-hover table-condensed table-bordered">
                                                <tr>
                                                  <td>Nombre</td>
                                                  <td>Apellido materno</td>
                                                  <td>Apellido paterno</td>
                                                  <td>id del alumno</td>
                                                  <td>id del curso</td>
                                                  <td>Calificacion</td>
                                                  <td>Dar de baja</td>
                                                </tr>
                                                <form action="darBaja.php" method="post">
                                                    <?php
                                                      while($ver=mysqli_fetch_row($res_query)){
                                                    ?>
                                                    <tr>
                                                      <td><?php echo $ver[0] ?></td>
                                                      <td><?php echo $ver[1] ?></td>
                                                      <td><?php echo $ver[2] ?></td>
                                                      <td><?php echo $ver[3] ?></td>
                                                      <td><?php echo $ver[4] ?></td>
                                                      <td><?php echo $ver[5] ?></td>
                                                      <td><button value="<?php echo $ver[3]?>-<?php echo $ver[4]?>" name="button" class="btn btn-light" type="submit">Dar Baja</button></td>
                                                    </tr>

                                                <?php
                                              }
                                                 ?>
                                                 </form>
                                              </table>
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

    <script type="text/javascript" src="calf.js">
      document.getElementById("darBaja").onclick = function() {alert("HOLA")};

      function myFunction() {
        alert("HOLA");
      }
      document.getElementById("td").onclick=function(){myFunction()}
    </script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
