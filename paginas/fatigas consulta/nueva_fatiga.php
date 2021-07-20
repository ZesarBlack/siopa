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
                      <li><a href="">Fatigas</a></li>
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
                <div class="col-md-12 text-center" style="margin-bottom:2em;"><h1>Registro de Fatigas</h1></div>
              </div>
              <form action="nueva_fatiga_back.php" method="post">
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Fecha">No Control </label>                     
                          <input type="number" class="form-control" name="no_control" id="no_control">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="FechaInicio"> Turno/Compañía </label>
                          <select class="form-control" name="Turno" id="turno">
                            <option value="100">Mañana</option>
                            <option value="101">Tarde</option>
                            <option value="102">Noche</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Fecha">Fecha </label>                     
                          <input type="date" class="form-control" name="Fecha" id="Fecha">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Base"> Base</label>
                          <input type="number"  class="form-control" name="Base" value="0">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Establecido">Servicio Establecido </label>                     
                          <input type="number" class="form-control" name="Establecido" value="0">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Escolta">Escolta </label>                     
                          <input type="number" class="form-control" name="Escolta" value="0">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Tierra"> Tierra </label>
                          <input type="number"  class="form-control" name="Tierra" value="0">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Incapacitados">Incapacitados </label>                     
                          <input type="number" class="form-control" name="Incapacitados" value="0">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Francos">Francos </label>                     
                          <input type="number" class="form-control" name="Francos" value="0">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Comisionados"> Comisionados </label>
                          <input type="number"  class="form-control" name="Comisionados" value="0">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Faltas">Faltas</label>                     
                          <input type="number" class="form-control" name="Faltas" value="0">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Vacaciones">Vacaciones  </label>                     
                          <input type="number" class="form-control" name="Vacaciones" value="0">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Arrestos"> Arrestos </label>
                          <input type="number"  class="form-control" name="Arrestos" value="0">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Permisos">Permisos </label>                     
                          <input type="number" class="form-control" name="Permisos" value="0">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Cursos">Cursos </label>                     
                          <input type="number" class="form-control" name="Cursos" value="0">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-4">
                          <label for="Confianza"> Control de Confianza </label>
                          <input type="number"  class="form-control" name="Confianza" value="0">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Suspendidos">Suspendidos </label>                     
                          <input type="number" class="form-control" name="Suspendidos" value="0">                              
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Bajas">Bajas </label>                     
                          <input type="number" class="form-control" name="Bajas" value="0">                              
                        </div>
                    </div>
                    <div class="form-row" style="margin-left:1em; margin-right:1em;">
                        <div class="form-group col-md-12">
                          <label for="Otros"> Otros </label>
                          <input type="number"  class="form-control" name="Otros" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="row">
                            <div class="col sm-12 text-center"><button class="btn btn-primary" type="submit">Registrar</button></div>
                           </div>    
                    </div>  
              </form>
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
    $(document).on('keyup','#BuscarCurso', function(event){
        var valor = $(this).val();
        if (valor != "") {
            buscar_datos(valor);
        }else{
            buscar_datos();
        }
    });
    function buscar_datos(consulta){
        $.ajax({
            url: 'buscar_curso.php',
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

