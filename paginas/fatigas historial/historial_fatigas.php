<!DOCTYPE html>
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
            <!--todo nuestro contenido-->
            <div class="row" style="margin-bottom:3rem; height:2rem;">
              <center><h1>Reporte de Fatigas</h1></center>
            </div>
            <div class="row"></div>
            <div class="row" style="margin:auto; margin-top:2rem">
            </div>
            <form class="form-inline"  method="post"  name="formFechas" id="formFechas">
    <div class="col-xs-10 col-xs-offset-3">
        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" class="form-control" name="FechaI" id="FechaI" required>
        </div>
        <div class="form-group">
            <label for="fecha_final">Fecha Final:</label>
            <input type="date" class="form-control" name="FechaF" id="FechaF" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
            <div class="row" style="margin-top: 3rem; margin-left: 2rem; margin-right: 2rem; padding: 10px;">
              <div class="card" >
                  <div class="card-body">
                    <!--todo nuestro contenido-->
                    <table class="table">
                     
                        <thead>
                       
                        <tr>
                          
                            <th scope="col">Fecha</th>
                            <th scope="col">Turno</th>
                            <th scope="col">Base</th>
                            <th scope="col">Escolta</th>
                            <th scope="col">Tierra</th>                     
                            <th scope="col">Francos</th> 
                            <th scope="col">Comicionados</th> 
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
<!--tabla muestra para los datos de ajax es necesario acompletar-->
           
                    

                   
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


 <script type="text/javascript" src="bitacora.js"></script>
 
   <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="fechas.js"></script>




<script>
    $(document).ready(function(){
        $('#datos').load('cargar_historial.php');
  });
</script>
