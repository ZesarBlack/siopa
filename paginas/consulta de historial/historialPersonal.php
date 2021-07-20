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
            <!--todo nuestro contenido----------------------------------------->
            <div class="row" style="margin-bottom:3rem; height:2rem;">
              <center><h1>Consulta del historial del personal</h1></center>
            </div>
            <div class="row"></div>
            <div class="row" style="margin:auto; margin-top:2rem">
               <div class="col-md-3 text-center"><label for="Buscar">Buscar</label></div>
               <div class="col-md-8 text-center"><input class="form-control" style="width:100%" type="text" name="BuscarHistorial" id="BuscarHistorial" placeholder="ID Personal "></div>
            </div>
            <div class="row" style="margin-top: 3rem; margin-left: 2rem; margin-right: 2rem; padding: 10px;">
              <div class="card" >
                  <div class="card-body">
                    <!--todo nuestro contenido----------------------->
                    <table class="table">
                     
                        <thead>
                       
                        <tr>
                          <th scope="col">ID Personal</th>
                            <th scope="col">Area Funcional</th>
                            <th scope="col">Fecha de alta</th>
                            <th scope="col">Arrestos </th>
                            <th scope="col">Faltas</th>
                            <th scope="col">Permisos</th>
                            
                            
                        </tr>
                        </thead>
                        <tbody id="datos">
                            
                        </tbody>
                      </table>
                  </div>
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
    $(document).on('keyup','#BuscarHistorial', function(event){
        var valor = $(this).val();
        if (valor != "") {
            buscar_datos(valor);
        }else{
            buscar_datos();
        }
    });
    function buscar_datos(consulta){
        $.ajax({
            url: 'buscar_historial.php',
            type: 'POST' ,
            dataType: 'html',
            data: {consulta: consulta},
        })
        .done(function(respuesta){
            $("#datos").html(respuesta);
        })
        .fail(function(){
            console.log("No existe esta información");
        });
    }

</script>
<script>
    $(document).ready(function(){
        $('#datos').load('cargar_historial.php');
  });
</script>

