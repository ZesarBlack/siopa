<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include '../../requires/conexion.php';
  $id_curso=$_POST['id_curso'];
  $query= "SELECT nombre, fecha_inicio , fecha_fin FROM cursos WHERE idcurso = '$id_curso'";
  $resultado = $conn->query($query);
  $conn->query("SET CHARACTER SET 'utf8'");
  while($datos=mysqli_fetch_row($resultado)){
    $curso = $datos[0];
    $fechaini = $datos[1];
    $fechafin = $datos[2];
  }
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
                            Titulo de página
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////////////-->
                                <h2 style="text-align: center;">Evaluación al desempeño docente</h2>
                                <div style="margin-top:4rem;">
                                  <label for="">Nombre del Curso: <?php echo $curso ?></label>
                                </div>
                                <div class="">
                                  <label for="">Fechas del Programa: <?php echo "Del  ".$fechaini." al ".$fechafin ?></label>
                                </div>
                                <div class="">
                                  <label for="">Nombre del (a) Maestro (a):</label>
                                </div>
                                <div class="">
                                  <label for="">Nombre de la Asignatura:</label>
                                </div>

                                <div class="m-t-2" style="margin-top:4rem;">
                                  <h4>Fecha de Evaluación</h4>
                                  Su participación en la evaluación y la veracidad de su respuesta tiene como objetivo el mejoramiento de la calidad de la Academia.
                                </div>
                                <div class="m-t-2" style="margin-top:4rem;">
                                  Seleccione el valor correspondiente, considerando lo que observa durante la sesión:
                                  <h4>1-Mal &nbsp; &nbsp; 2-Regular &nbsp; &nbsp; 3-Bueno &nbsp; &nbsp; 4-Excelente</h4>
                                </div>
                                <form name="form2" method="POST" action="respuestas.php">
                                <input type="hidden" id="id_curso" name="id_curso" value=<?php echo '"'.$id_curso.'"'; ?>>
                                <table class="table table-bordered" style="margin-top:4rem;">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Pregunta</th>
                                      <th scope="col">1</th>
                                      <th scope="col">2</th>
                                      <th scope="col">3</th>
                                      <th scope="col">4</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    /*
                                    for ($i=0; $i < 15; $i++) {
                                      echo $i+1;
                                      echo "
                                      <tr>
                                        <th scope='row'>"; echo $i+1; echo "</th>
                                        <td>Cual es tu nombre</td>
                                        <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input'></td>
                                        <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input'></td>
                                        <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input'></td>
                                        <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input'></td>
                                      </tr>
                                      ";
                                    }*/
                                    ?>
                                    <tr>
                                      <th scope='row'>1</th>
                                      <td>La estructura y planeación del CURSO facilitó mi aprendizaje</td>
                                      <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='1' name='1' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>2</th>
                                      <td>El profersor (a) propició la participación individual</td>
                                      <td><input type='radio' id='2' name='2' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='2' name='2' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='2' name='2' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='2' name='2' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>3</th>
                                      <td>La dinámica del Curso me gustó porque el material didáctico (Videos, presentaciones, audios, etc) me ayudaron a comprender el objetivo del programa</td>
                                      <td><input type='radio' id='3' name='3' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='3' name='3' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='3' name='3' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='3' name='3' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>4</th>
                                      <td>Las técnicas de enseñanza utilizadas ayudaron a la comprensión de los temas</td>
                                      <td><input type='radio' id='4' name='4' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='4' name='4' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='4' name='4' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='4' name='4' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>5</th>
                                      <td>El profesor (a) fomentó que se fundamentaran o argumentaran nuestras ideas</td>
                                      <td><input type='radio' id='5' name='5' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='5' name='5' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='5' name='5' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='5' name='5' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>6</th>
                                      <td>El dominio del tema por parte del Profesor (a) me permitió aprender con mayor facilidad</td>
                                      <td><input type='radio' id='6' name='6' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='6' name='6' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='6' name='6' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='6' name='6' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>7</th>
                                      <td>La secuencia y el orden de las sesiones estuvieron de acuerdo con los temas de la asignatura</td>
                                      <td><input type='radio' id='7' name='7' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='7' name='7' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='7' name='7' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='7' name='7' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>8</th>
                                      <td>Entendí todos los conceptos</td>
                                      <td><input type='radio' id='8' name='8' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='8' name='8' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='8' name='8' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='8' name='8' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>9</th>
                                      <td>Las dudas fueron aclaradas</td>
                                      <td><input type='radio' id='9' name='9' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='9' name='9' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='9' name='9' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='9' name='9' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>10</th>
                                      <td>Los fundamentos teóricos del Cursos se relacionaron con las experiencias que vivo en mi trabajo</td>
                                      <td><input type='radio' id='10' name='10' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='10' name='10' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='10' name='10' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='10' name='10' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>11</th>
                                      <td>Considero que los contenidos impartidos y los conocimientos adquiridos en el curso son relevantaes y actualizados de acuerdo a las funciones que realizó o realizaré</td>
                                      <td><input type='radio' id='11' name='11' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='11' name='11' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='11' name='11' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='11' name='11' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>12</th>
                                      <td>Se logró un ambiente cordial</td>
                                      <td><input type='radio' id='12' name='12' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='12' name='12' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='12' name='12' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='12' name='12' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                    <tr>
                                      <th scope='row'>13</th>
                                      <td>El profesor (a) expuso los objetivos del curso</td>
                                      <td><input type='radio' id='13' name='13' aria-label='Radio button for following text input' value="1" required></td>
                                      <td><input type='radio' id='13' name='13' aria-label='Radio button for following text input' value="2"></td>
                                      <td><input type='radio' id='13' name='13' aria-label='Radio button for following text input' value="3"></td>
                                      <td><input type='radio' id='13' name='13' aria-label='Radio button for following text input' value="4"></td>
                                    </tr>
                                  </tbody>
                                  </table>
                                  Me gustaría tenerlo (a) como profesor:
                                    <input style="margin-left:2rem;" type="radio" name="14" id="14" value="Si" required>Si
                                    <input style="margin-left:2rem;" type="radio" name="14" id="14"value="No">No

                                    <div class="m-t-2" style="margin-top: 4rem;">
                                      ¿Tienes algún comentario, sugerencia o propuesta al profesor (a)?
                                    <textarea class="form-control" id="15" name="15" rows="3"></textarea>
                                    </div>
                                    <div class="">

                                      <input type="submit" style="margin-top:2rem;" class="btnus" name="guardar" id="guardar" value="Guardar Respuestas" required>
                                    </div>
                                  </form>
                                <!-- content ends here////////////////////////////// -->
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
