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
        <div class="container-fluid" style="background-color:#ffffff; margin-left:2em; margin-right:2em;">
            <!--todo nuestro contenido----------------------------------------->
            <h3 class="card-title" align="center">Movimiento Personal</h3>


<form name="Movimientopersonal" action="conexion.php" method="POST">
                   <div class="form-row">
                       <div class="form-group col-md-12" >

                         <input type="text"  class="form-control has-feedback-left" name="Buscar" id="Busc"  placeholder="Buscar">
                          <div class="help-info"></div>
                            <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
                        </div>
                      </div>




                                <h2>Cambio de Adscripcion</h2>
                                <div class="form-group-row">
                                  <div class="form-group col-md-6">
                                      <p> Direccion Anterior:
                                      <select name="genero" class="custom-select"></p>
                                        <option value="0">Seleccione:

                                        </option>
                                      </select>
                                    </div>


                                <div class="form-group col-md-6">
                                      <p>Direccion Actual:
                                      <select name="genero" class="custom-select"></p>
                                      <option value="0">Seleccione:</option>


                                      </select>
                                </div>

                               <!-- <input class="form-control" type="text" placeholder="Readonly input here…" readonly>-->

                            </div>
                          <div class="form-group-row">
                                  <div class="form-group col-md-6">
                                      <p>Departamento Anterior:
                                      <select name="genero" class="custom-select"></p>
                                        <option value="0">Seleccione:</option>s
                                      </select>

                                    </div>


                                <div class="form-group col-md-6">
                                      <p>Departamento Actual:
                                      <select name="genero" class="custom-select"> </p>
                                      <option value="0">Seleccione:</option>


                                      </select>

                                </div>

                            </div>

<h2>Cambio de Puesto</h2>

                                  <div class="form-group-row">
                                      <div class="form-group col-md-7">
                                      <p>Puesto/Categoria Anterior:
                                      <select name="genero" class="custom-select" ></p>
                                         <option value="0">Seleccione:</option>
                                      </select>

                                    </div>


                                <div class="form-group col-md-5">

                                      <p> Actividad:
                                 <input type="radio" name="hm" value="h"> Operativo
                                <input type="radio" name="hm" value="m"> Administrativo

                               </p>

                                </div>


                            </div>

                            <div class="form-group-row">
                              <div class="form-group col-md-7">
                             <p>Funcion Anterior:
                             <input class="form-control" type="text" placeholder="" readonly></p>

                              </div>


                            </div>
                            <div class="form-group-row">
                              <div class="form-group col-md-5">
                             <p> Funcion actual:
                             <input class="form-control" type="text" placeholder="Horario" ></p>

                              </div>


                            </div>

                              <div class="form-group-row">
                              <div class="form-group col-md-7">
                             <p>Horario Anterior:
                             <input class="form-control" type="time" placeholder="Horario" ></p>

                              </div>


                            </div>
                            <div class="form-group-row">
                              <div class="form-group col-md-5">
                             <p> Horario actual:
                             <input class="form-control" type="time" placeholder="Horario" ></p>

                              </div>


                            </div>

          <h2>Cambio de Sueldo</h2>


            <div class="form-group-row">
                              <div class="form-group col-md-6">
                             <p>Sueldo Anterior:
                             <input class="form-control" type="text" placeholder="Saldo Anterior"></p>

                              </div>
                              <div class="form-group col-md-6">
                             <p>Sueldo Actual:
                             <input class="form-control" type="text" placeholder="Saldo Actual"></p>

                              </div>
            </div>

            <div class="form-group-row">
                          <div class="col-md-6 col-sm-6 col-xs-4 form-group has-feedback">
                              <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaNacimiento"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' >
                                  A partir del dia
                            <div class="help-info"></div>
                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>


                            <div class="form-group col-md-6">

                                      <p> Presenta documentacion:
                                 <input type="radio" name="hm" value="h"> si
                                <input type="radio" name="hm" value="m"> no

                               </p>

                                </div>
                      </div>
  <div class="form-group-row">
                      <div class="form-group col-md-12 ">
                  <p>Observaciones
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea></p>
              </div>
</div>


<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary">Cancelar</button>
  <button type="submit" class="btn btn-default">Aplicar Movimiento</button>

</div>
              </form>



            <!--/todo nuestro contenido----------------------------------------->
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
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
