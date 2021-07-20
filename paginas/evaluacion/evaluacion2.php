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
        <div class="right_col" role="main">
          <!-- top tiles -->
          <?php require '../../requires/titulo.php'; ?>
          <!-- /top tiles -->
          <!--<div class="row">-->
            <!--todo nuestro contenido----------------------------------------->
            <div class="container-fluid" style="background-color:#ffffff; padding-top:1.5em; margin-left:2em;margin-right:2em;">
            <div class="row" style="margin-bottom:3rem; height:2rem; background-color: #ffffff;">
            <div class="col-md-4"></div>
              <center><h1>Buscar Evaluaciones</h1></center>
            </div>
            <div class="row"></div>
            <div class="row" style="margin:auto; margin-top:2rem">
               <div class="col-md-3 text-center"><label for="Buscar">Buscar</label></div>
               <div class="col-md-8 text-center"><input class="form-control" style="width:100%" type="text" name="BuscarCurso" id="BuscarCurso" placeholder="Curso"></div>
            </div>
            <div class="row" style="margin-top: 3rem; margin-left: 2rem; margin-right: 2rem">
              <div class="card" >
                  <div class="card-body">
                    <!--todo nuestro contenido----------------------->
                    <table class="table">
                        <thead>
                        <tr>
                          <th scope="col">Nombre Evaluación</th>
                            <th scope="col">del</th>
                            <th scope="col">Al</th>
                            <th scope="col">Horas</th>
                            <th scope="col">Curricular</th>
                            <th scope="col">Entidad</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Documento</th>

                        </tr>
                        </thead>
                        <tbody id="datos">

                        </tbody>
                      </table>
                  </div>
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
