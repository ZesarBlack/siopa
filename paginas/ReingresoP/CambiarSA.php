<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
include '../../requires/conexion.php';
   ?>
   <style>
   .parent {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 3 / 3; }
    .div2 { grid-area: 1 / 3 / 2 / 6; }
    .div3 { grid-area: 2 / 3 / 3 / 6; }
    .div4 { grid-area: 3 / 1 / 4 / 6; }
    .div5 { grid-area: 4 / 1 / 5 / 6; }
    .div6 { grid-area: 5 / 1 / 6 / 6; }
    </style>
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

          $nom= $fila["nombre"];
          $pat= $fila["ap_paterno"];
          $mat= $fila["ap_materno"];
          $dir= $fila["direccion"];
          $fechanac= $fila["fecha_nac"];
          $curp= $fila["curp"];
          $imss= $fila["imss"];
          $rfc= $fila["rfc"];
          $smn= $fila["smn"];
          $cas= $fila["tel_casa"];
          $mov= $fila["tel_movil"];
          $correo= $fila["correo_electronico"];
          $est= $fila["estado"];
          $estatus= $fila["estatus"];
          $sa= $fila["situacion_actual"];
                ?>
                <form action="CambiarSA_back.php" method="POST">


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
                      <div class="parent">
                        <div class="div1">
                          <img src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg" alt="Girl in a jacket" width="300" height="200" style="margin: 2rem;">
                        </div>
                        <div class="div2">
                          <label for="nocontrol">No.Control</label>
                          <input type="text" name="Nocontrol" id="nocontrol" value=<?php echo '"'.$idpersona.'"'?> disabled>
                          <label for="estatus" style="margin-left: 2rem;">Estatus</label>
                          <select id="estatus" name="estatus" disabled>
                            <?php
                            if ($estatus == 'Activo') {
                              echo '<option value="Activo" id="estatus" name="estatus" selected>Activo</option>
                            <option value="Inactivo" id="estatus" name="estatus">Inactivo</option>';
                            }else{
                              echo '<option value="Activo" id="estatus" name="estatus">Activo</option>
                            <option value="Inactivo" id="estatus" name="estatus" selected>Inactivo</option>';
                            }
                            ?>
                          </select>
                          <label for="estatusDP" style="margin-left: 2rem;">Estatus DP</label>
                          <select id="estatusDP" name="estatusDP" disabled>
                            <?php
                            if ($estatusDP == 'Activo') {
                              echo '<option value="Activo" id="estatusDP" name="estatusDP" selected>Activo</option>
                            <option value="Inactivo" id="estatusDP" name="estatusDP">Inactivo</option>';
                            }else{
                              echo '<option value="Activo" id="estatusDP" name="estatusDP">Activo</option>
                            <option value="Inactivo" id="estatusDP" name="estatusDP" selected>Inactivo</option>';
                            }
                            ?>
                          </select>
                          <br>
                          <div style="margin-top: 2rem;">
                            <label for="apaterno">A. Paterno</label>
                            <input type="text" name="apaterno" id="apaterno" value=<?php echo '"'.$pat.'"'?> disabled style="margin-left: 2rem;">
                            <label for="amaterno" style="margin-left: 2rem;">A. Materno</label>
                            <input type="text" name="amaterno" id="amaterno" value=<?php echo '"'.$mat.'"'?> disabled style="margin-left: 2rem;">
                            <label for="nombre" style="margin-left: 2rem;">Nombre(s)</label>
                            <input type="text" name="nombre" id="nombre" value=<?php echo '"'.$nom.'"'?> disabled style="margin-left: 2rem;">
                          </div>

                          <div style="margin-top: 2rem;">
                            <label for="fechanac">Fecha de Nacimiento</label>
                            <input type="text" name="fechanac" id="fechanac" value=<?php echo '"'.$fechanac.'"'?> disabled style="margin-left: 2rem;">
                            <label for="sita" style="margin-left: 2rem;">Situación actual</label>
                            <select id="sita" name="sita" style="margin-left: 2rem;">
                              <?php
                              if ($sa == 'Soltero') {
                                echo '<option value="Soltero" id="sita" name="sita" selected>Soltero</option>
                              <option value="Casado" id="sita" name="sita">Casado</option>
                              <option value="Divorciado" id="sita" name="sita">Divorciado</option>
                              <option value="Otro" id="sita" name="sita">Otro</option>';
                            }elseif($sa == 'Casado') {
                              echo '<option value="Soltero" id="sita" name="sita">Soltero</option>
                            <option value="Casado" id="sita" name="sita" selected>Casado</option>
                            <option value="Divorciado" id="sita" name="sita">Divorciado</option>
                            <option value="Otro" id="sita" name="sita">Otro</option>';
                            }elseif($sa == 'Divorciado') {
                              echo '<option value="Soltero" id="sita" name="sita">Soltero</option>
                            <option value="Casado" id="sita" name="sita">Casado</option>
                            <option value="Divorciado" id="sita" name="sita" selected>Divorciado</option>
                            <option value="Otro" id="sita" name="sita">Otro</option>';
                            } else {
                              echo '<option value="Soltero" id="sita" name="sita">Soltero</option>
                            <option value="Casado" id="sita" name="sita">Casado</option>
                            <option value="Divorciado" id="sita" name="sita">Divorciado</option>
                            <option value="Otro" id="sita" name="sita" selected>Otro</option>';
                            }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="div3" style="margin-top: 1rem;">
                          <label for="Tel.Casa">Tel.Casa</label>
                          <input type="text" name="Tel.Casa" id="Tel.Casa" value=<?php echo '"'.$cas.'"'?> disabled style="margin-left: 2rem;">
                          <label for="Tel.Movil" style="margin-left: 2rem;">Tel.Movil</label>
                          <input type="text" name="Tel.Movil" id="Tel.Movil" value=<?php echo '"'.$mov.'"'?> disabled style="margin-left: 2rem;">
                          <div  style="margin-top: 2rem;">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" value=<?php echo '"'.$dir.'"'?> disabled style="margin-left: 2rem;">
                            <label for="Correo" style="margin-left: 2rem;">Correo Electronico</label>
                            <input type="text" name="Correo" id="Correo" value=<?php echo '"'.$correo.'"'?> disabled style="margin-left: 2rem;">
                          </div>
                          <div style="margin-top: 2rem;">
                            <label for="CURP">CURP</label>
                            <input type="text" name="CURP" id="CURP" value=<?php echo '"'.$curp.'"'?> disabled>
                            <label for="IMSS">IMSS</label>
                            <input type="text" name="IMSS" id="IMSS" value=<?php echo '"'.$imss.'"'?> disabled>
                            <label for="RFC">RFC</label>
                            <input type="text" name="RFC" id="RFC" value=<?php echo '"'.$rfc.'"'?> disabled>
                            <label for="SMN">SMN</label>
                            <input type="text" name="SMN" id="SMN" value=<?php echo '"'.$smn.'"'?> disabled>
                          </div>
                        </div>
                        <div class="div4">
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Observaciones</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col sm-12 text-center"><button type="submit">Cambiar</button></div>

                            </div>
                          </div>
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
