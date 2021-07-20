<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
include '../../requires/conexion.php';
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
                      <li><a href="../bitacora/bitacora.php">Bitacora</a></li>
                      <li><a href="../catalogos/catalogo.php">Catalogo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Formación Continua <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../formacionContinua/cursos.php">Buscar Cursos</a></li>
                      <li><a href="">Editar Cursos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Desarrollo formacion inicial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../CédulaA/aspirante.php">Cedula</a></li>
                      <li><a href="../perfilM/medico.php">Perfil Médico</a></li>
                      <li><a href="../Sol_Control_Conf/solconfi.php">Contrl de confianza</a></li>
                      <li><a href="../Calf_cadetes/califcadetes.php">Calificaciones</a></li>
                    </ul>
                  </li>
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
          <div class="container-fluid" style="background-color:#ffffff; margin-left:2em; margin-right:2em;">
            <!--todo nuestro contenido----------------------------------------->
            <!--<div class="row" style="margin-bottom:3rem; height:2rem;">-->
              <div class="col-md-4"></div>
              <div class="col-md-4 text-center"><p style="font-size:18pt; color:black">Selección de Estado</p></div>
            <!--div class="row" style="margin:auto">-
                <div class="col-md-12">-->
                	<?php
					$idpersona=$_GET['idpersona'];
					$buscar=mysqli_query($conn,"SELECT * FROM persona WHERE idpersona='$idpersona'");
					$fila=mysqli_fetch_array($buscar);

                $est= $fila["estado"];
?>
                <form action="cambiarE_back.php" method="POST">


                    <div class="row tile_count">
                    <div class="form-group col-xs-7">
                      <!-- <input type="text" class="form-control has-feedback-left"
                             id="contras" placeholder="Nombre	" name="contras" style='font-size: 12pt;
                              font-weight: bold; color: red; text-align: center;'>-->

                              <div class="help-info"></div>

                      </div>
                    </div>


                  <div class="row tile_count">

                    	<input type="hidden" name="idpersona" value="<?php echo $idpersona;?>">

          <div class="row tile_count">
              	<div class="col-xs-3"></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                      <label>Elegir Estado</label>
                      <div class="">
                      </div>
                    </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                     <label for="Activo">Activo</label>
                     <input type="radio" name="cambiar" id="cambiar" value="Activo"> <?php /*if($regi == "Si") echo "checked"; */?>
                     <div class="">
                     </div>
                 </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                     <label for="Inactivo">Inactivo</label>
                     <input type="radio" name="cambiar" id="cambiar" value="Inactivo"> <?php /*if($regi == "No") echo "checked"; */?>
                     <div class="">
                     </div>
                 </div>
              </div>

					<div class="form-group">
                        <div class="row">
                            <div class="col sm-12 text-center"><button type="submit">Cambiar</button></div>

                        </div>
                    </div>

                </form>



                <!--<div class="col-md-3"></div>
                <div class="col-md-3">Nombre del Curso o Capacitación</div>
                <div class="col-md-3"><input type="text" name="NombreCurso" id="NombreCurso"></div>
                <div class="col-md-3"></div>-->

                <!--/todo nuestro contenido----------------------------------------->
              <!--</div>-->
            	</div>
            <!-- /page content -->
         <!-- </div>
        </div>-->
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
 var nombre="";
 var fecha="";
 var tipo="";
$(document).on('keyup','#nombre', function(event){
	nombre = $(this).val();
  enviar(nombre, fecha, tipo);
});
$(document).ready(function(){
	$("#fecha").change(function(event){
        fecha = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});
$(document).ready(function(){
	$("#tipo").change(function(event){
        tipo = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});

function enviar(nombre, fecha, tipo){
    buscar_datos(nombre, fecha, tipo);
}
</script>
