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
                            Catálogo de cursos
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
                                    <div class="col-sm-3 float-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#2A3F54; width:100%; ">Agregar Curso</button>
                                    </div>
                                </div>
                                <div class="container-fluid" style="background-color:#ffffff; padding-top:1.5em; margin-left:2em;margin-right:2em;">
                                  <div class="row"></div>
                                  <div class="row" style="margin:auto; margin-top:1rem">
                                    <div class="col-md-3 text-center"><label for="Buscar">Buscar</label></div>
                                    <div class="col-md-3 text-center"><input class="form-control" style="width:100%" type="text" name="BuscarCurso" id="BuscarCurso" placeholder="Curso"></div>
                                  </div>
                                  <div class="row" style="margin-top: 3rem; margin-left: 2rem; margin-right: 2rem">
                                    <div class="card" >
                                        <div class="card-body">
                                          <!--todo nuestro contenido----------------------->
                                          <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Curso</th>
                                                  <th scope="col">Dirigido para </th>
                                                  <th scope="col">Tipo de Curso</th>
                                                  <th scope="col">Tipo de calificacion</th>
                                                  <th scope="col">Estado</th>
                                                </tr>
                                              </thead>
                                              <tbody id="datos">
                                              </tbody>
                                            </table>

                                <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form  action="cursos_back.php" method="POST">
                                              <div class="row" style="margin-top:2em;">
                                                  <div class="col-sm-1"></div>
                                                  <div class="col-sm-3">Naturaleza</div>
                                                  <div class="col-sm-7"></div>
                                                  <select class="form-control" style="width:30%" name="naturaleza" id="naturaleza" required>
                                                    <option value="">Seleccionar</option>
                                                    <option value="inicial">Formacion incial</option>
                                                    <option value="normal">Curso</option>
                                                  </select>
                                              </div>
                                              <div id="formularios">
                                              </div>
                                            </form>
                                        </div>
                                        <!-- Modal footer -->
                                    </div>
                                </div>
                                </div>
                                <!-- content ends here////////////////////// -->
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
<script type="text/javascript" src="cursos.js"></script>
