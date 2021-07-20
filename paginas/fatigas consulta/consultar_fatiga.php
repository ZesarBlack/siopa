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
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../../index.php">Principal</a></li>
                  <li><a><i class="fa fa-home"></i> Aministración <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Bitacora</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Formación Continua <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Cursos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Fatigas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Nueva fatiga</a></li>
                      <li><a href="">Consultar Fatigas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <?php require '../../requires/top_nav.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <?php require '../../requires/titulo.php'; ?>
          <!-- /top tiles -->
          <!--<div class="row">-->
            <!--todo nuestro contenido----------------------------------------->
            <div class="container-fluid" style="background-color:#ffffff; padding-top:1.5em; margin-left:2em;margin-right:2em;">
              <!--<div class="row" style="margin-bottom:3rem; height:2rem; background-color: #ffffff;">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center" style="background-color:lightgreen"><p style="font-size:18pt; color:black">Cursos</p></div>
                <div class="col-md-4"></div>
              </div>-->
              <div class="row" style="margin:auto; margin-top:1rem" >
                <div class="col-md-12 text-center" style="margin-bottom:1em;"><h1>Consulta de Fatigas</h1></div>
              </div>
              <div class="row"></div>
              <div class="row" style="margin:auto; margin-top:1rem">
                <div class="col-md-3 text-center"><label for="Buscar">Buscar</label></div>
                <div class="col-md-7 text-center"><input class="form-control" style="width:100%" type="text" name="idPersona" id="idPersona" placeholder="Ingresa el Id Persona"></div>
                <div class="col-md-1 text-center"><button class="btn btn-primary" id="buscarPersona">Buscar</button></div>
              </div>
              <div class="row" style="margin-top: 3rem; margin-left: 2rem; margin-right: 2rem">
                <div class="card" >
                    <div class="card-body">
                      <!--todo nuestro contenido----------------------->
                      <table class="table">
                          <thead>
                          <tr>
                            <th scope="col">Fecha</th>
                              <th scope="col">Turno</th>
                              <th scope="col">Base</th>
                              <th scope="col">Escolta</th>
                              <th scope="col">Tierra</th>
                              <th scope="col">Francos</th>
                              <th scope="col">Comisionados</th>
                              <th scope="col">Cursos</th>
                              <th scope="col">Control de Confianza</th>
                              <th scope="col">Suspendidos</th>
                              <th scope="col">Bajas</th>
                          </tr>
                          </thead>
                          <tbody id="datos">
                              
                          </tbody>
                        </table>
                    </div>
                </div>
              </div>
            
            </div>
            <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="cursos_back.php" method="POST">
                            <div class="row" style="margin-top:2em;">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">Nombre del Curso</div>
                                <div class="col-sm-7"><input type="text" style="width:100%" name="NombreCurso" required></div>
                            </div>
                            <div class="row" style="margin-top:2em;">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">Curso para: </div>
                                <div class="col-sm-7">
                                <div class="" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="CursoPara" id="option1" autocomplete="off" checked value="Cadetes"> Cadetes
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="CursoPara" id="option2" autocomplete="off" value="Policias"> Policias
                                    </label>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row" style="margin-top:2em;">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">Tipo de Curso: </div>
                                <div class="col-sm-7">
                                <div class="" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="TipoCurso" id="option1" checked autocomplete="off" value=0> Obligatorio
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="TipoCurso" id="option2" autocomplete="off" value=1> No Obligatorio
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:2em;">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">Tipo de Calificación: </div>
                                <div class="col-sm-7">
                                <div class="" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="TipoCalificacion" checked id="option1" autocomplete="off" value="Numerica"> Númerica
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="TipoCalificacion" id="option2" autocomplete="off" value="Aprobado/No Aprobado">Aprobado / No Aprobado
                                    </label>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear Curso</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
            <!--/todo nuestro contenido----------------------------------------->
          <!--</div>-->
        </div>
        <!-- /page content -->
      </div>
    </div>
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
    $(document).on('click','#buscarPersona', function(event){
        var valor = $('#idPersona').val();
        if (valor != "") {
            buscar_datos(valor);
        }else{
            alert("Error, debe ingresar un ID para buscar");
        }
    });
    function buscar_datos(consulta){
        $.ajax({
            url: 'buscar_persona.php',
            type: 'POST' ,
            dataType: 'html',
            data: {consulta: consulta},
        })
        .done(function(respuesta){
            $("#datos").html(respuesta);
        })
        .fail(function(){
            console.log("error");
        });
    }

</script>
<script>
    $(document).ready(function(){
        $('#datos').load('cargar_curso.php');
	});
</script>

