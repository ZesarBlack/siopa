<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
          include '../../requires/conexion.php';
          if (isset($_GET['id'])) {
            $id  = $_GET['id'];
        }else{
            $id = "";
        }
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
                            Mover Personal
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form action="moverPersonal_back.php" method="POST">
                                    <input type="hidden" name="no_control" id="id" value="<?php echo $id?>">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Cambio de Adscripión</legend>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-md-6 col-sm-12">
                                                <label for="Fecha">Dirección Anterior </label>                     
                                                <input type="text" name="direccionAnterior" id="direccionAnterior" class="form-control" readonly>
                                            </div>
                                            <div class="form-group col-12 col-sm-12 col-md-6">
                                                <label for="FechaInicio"> Dirección Actual </label>
                                                <select class="form-control" name="direccionActual" id="direccionActual" >
                                                    <option value="Seguridad Ciudad">Secretaria de Seguridad Ciudadana</option>
                                                    <option value="Transito">Secretaria de Transito</option>
                                                    <option value="otra">Secretaria de ...</option>
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-md-6 col-sm-12">
                                                <label for="Fecha">Deparamento Anterior </label>                     
                                                <input type="text" name="departamentoAnterior" id="departamentoAnterior" class="form-control" readonly>                             
                                            </div>
                                            <div class="form-group col-12 col-sm-12 col-md-6">
                                                <label for="FechaInicio"> Departamento Actual </label>
                                                <select class="form-control" name="departamentoActual" id="departamentoActual">
                                                    <option value="1">DERI</option>
                                                    <option value="2">Tecnologias</option>
                                                    <option value="3">Dep</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset> 
                                    <fieldset class="scheduler-border" style="margin-top:2em">
                                        <legend class="scheduler-border">Cambio de Puesto</legend>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-sm-12 col-lg-6 col-md-6">
                                                <label for="FechaInicio"> Actividad Anterior</label>
                                                <input type="text" name="actividadAnterior" id="puestoAnterior" class="form-control" readonly>
                                            </div>
                                            <label class="col-form-label col-12 col-sm-2 pt-0" style="margin-top:3em;">Actividad Actual</label>
                                                <div class="col-sm-4 col-12" style="margin-top:2em;">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="actividadActual" id="gridRadios1" value="operativo" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Operativo
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="actividadActual" id="gridRadios2" value="administrativo">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Administrativo
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-sm-12 col-lg-6 col-md-6">
                                                <label for="FechaInicio"> Funcion Anterior</label>
                                                <input type="text" name="funcionAnterior" id="funcionAnterior" class="form-control" readonly>
                                            </div>
                                                <div class="form-group col-12 col-md-6 col-sm-12 col-lg-6" >
                                                <label for="Fecha">Función Actual</label>                     
                                                <input type="text" name="funcionActual" id="funcionActual" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-sm-12 col-lg-6 col-md-6">
                                                <label for="FechaInicio"> Horario Anterior</label>
                                                <input type="text" name="horarioAnterior" id="horarioAnterior" class="form-control" readonly>
                                            </div>
                                                <div class="form-group col-12 col-md-6 col-sm-12 col-lg-6" >
                                                <label for="Fecha">Horario Actual</label>                     
                                                <input type="text" name="horarioActual" id="horarioActual" class="form-control" required >
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="scheduler-border" style="margin-top:2em">
                                        <legend class="scheduler-border">Cambio de Sueldo</legend>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-sm-12 col-lg-6 col-md-6">
                                                <label for="FechaInicio"> Sueldo Anterior</label>
                                                <input type="text" name="sueldoAnterior" id="sueldoAnterior" class="form-control" readonly>
                                            </div>
                                            <div class="form-group col-12 col-md-6 col-sm-12 col-lg-6" >
                                                <label for="Fecha">Sueldo Actual</label>                     
                                                <input type="text" name="sueldoActual" id="sueldoActual" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                            <div class="form-group col-12 col-md-6 col-sm-12 col-lg-6" >
                                                <label for="Fecha">A partir del día</label>                     
                                                <input type="date" name="apartirde" id="apartirde" class="form-control" required>
                                            </div>
                                            <label class="col-form-label col-6 col-sm-2 pt-0" style="margin-top:1.5em;">Presenta Documentación</label>
                                                <div class="col-sm-4 col-6" style="margin-top:1em;">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="con_documentos" id="gridRadios1" value="1" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Si
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="con_documentos" id="gridRadios2" value="0">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            No
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>
                                    </fieldset> 
                                    <fieldset class="scheduler-border" style="margin-top:2em">
                                        <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                            <div class="form-group" style="padding-bottom:1em">
                                            <label for="Fecha">Observaciones</label>                     
                                            <textarea class="form-control" id="observaciones" name="observaciones" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col sm-6 text-center">
                                                    <a href="../ReingresoP/"><button class="btn btn-danger" type="button" >Cancelar</button></a>
                                                    <button class="btn btn-primary" type="submit">Registrar</button>
                                                </div>
                                                
                                            </div>    
                                        </div>
                                    </fieldset>    
                                    
                                </form>
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
    <?php require '../../requires/script_pag.php'; ?>    
    <script type="text/javascript" src="moverPersonal.js"></script>
  </body>
</html>
