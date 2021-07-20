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
                            Administración de Catálogos
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
                                  <div class="col-md-4">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Seleccione el catalogo</label>
                                      <select class="" name="catalogo" id="catalogo">
                                        <option value="cat_documentos">documentos</option>
                                        <option value="cat_entidades">entidades</option>
                                        <option value="cat_estatus_acad">academicos</option>
                                        <option value="cat_estatus_dp">departamento</option>
                                        <option value="cat_estatus_exp">experiencia</option>
                                        <option value="cat_medico_preguntas">preguntas medicas</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th >id</th>
                                        <th >descripción</th>
                                        <th ></th>
                                        <th ></th>
                                      </tr>
                                    </thead>
                                    <tr>
                                       <?php include 'catalogo_back.php'; ?>
                                    </tr>

                                    <tbody id="datos">
                                    </tbody>
                                  </table>
                                </div>

                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /page content -->
      </div>
    </div>
    <script type="text/javascript" src="catalogo.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
 var catalogo="";
$(document).ready(function(){
  $("#catalogo").change(function(event){
        catalogo = $(this).val();
        enviar(catalogo);
        });
});

function enviar(catalogo){
    buscar_datos(catalogo);
}
</script>
