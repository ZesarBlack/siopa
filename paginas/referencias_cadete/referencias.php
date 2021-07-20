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
                            FORMATO PARA REGISTRO DE REINGRESOS
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                   <!--   <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">-->
                                <!-- content starts here ////////////////////-->
                                <form name="Alta PERSONAL" action="altapersonal_back.php" method="POST">




<fieldset>
<legend>Datos Personales</legend>

                                      <div class="row">
                                         <div class="form-group col-xs-11">
                                          <p>Nombre:
                                          <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="nombre" required=""></p>
                                          </div>
                                      </div>

                                    <div class="row">
                                      <div class="form-group col-xs-11">
                                          <p>Domicilio:
                                           <input type="text" class="form-control" name="domic" placeholder="Domicilio" required=""></p>
                                        </div>
                                    </div>

                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Celular:
                                           <input type="text" class="form-control" name="celular" placeholder="Celular" required=""></p>
                                        </div>
                                    </div>
                                    

                                    <div class="row ">
                                      <div class="form-group col-xs-4">
                                          <p>Telefono 1:
                                           <input type="text" class="form-control" name="Telefon" placeholder="Telefono" required=""></p>
                                        </div>
                                    </div>
                                    






</fieldset>




<fieldset>
<legend>Antecedentes Laborales</legend>
                                          <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-5 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaAlta"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha de alta:
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                          <div class="col-md-5 col-sm-5 col-xs-5 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaBaja"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha de baja:
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                      </div>


                                            <div class="row">
                                             <div class="form-group col-xs-11">
                                            <p>Motivo de la baja:
                                        <input type="text" class="form-control" name="Motivo" placeholder="Motivo" required=""></p></div>
                                         </div>

                                            <div class="row">
                                            <div class="form-group col-xs-11">
                                            <p>Grado:
                                        <input type="text" class="form-control" name="Grado" placeholder="Grado" required=""></p></div>
                                            </div>



                                            <div class="row">
                                            <div class="form-group col-xs-11">
                                            <p>Ultimo mando:
                                        <input type="text" class="form-control" name="Mando1" placeholder="Mando" required=""></p>
                                          </div>
                                            </div>
</fieldset>




<fieldset>
<legend>Formacion Profesional</legend>
                                        <div class="row">
                                          <div class="form-group col-xs-10">
                                          
                                        <input type="text" class="form-control" name="GradoMax" placeholder="Grado Maximo" required="">Grado Maximo de Estudios:
                                           </div>
                                                  
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Certificado de Estudios:</label> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Certfsi">Si</label>
                                  <input type="radio" name="certf" id="certf" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Certfno">No</label>
                                  <input type="radio" name="certf" id="certf" value="No" > &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>

                                         </div>



<div class="row">
<div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Formacion inicial:</label> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Certfsi">Si</label>
                                  <input type="radio" name="naciona" id="naciona" value="Nacimiento" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Certfno">No</label>
                                  <input type="radio" name="naciona" id="naciona" value="Naturalizado" > &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaNacimiento"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha:
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                      </div>   


<div class="row">

                                 
                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaNacimiento"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha de Evaluacion de control y confianza:
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                          <div class="form-group col-xs-6">
                                           
                                        <input type="text" class="form-control" name="Res" placeholder="Resultado" required="">
                                        Resultado
                                          </div>

                                      </div>   
                                      <div class="row">

                                 
                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaNacimiento"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha de Evaluacion de Desempeño:
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                          <div class="form-group col-xs-6">
                                           
                                        <input type="text" class="form-control" name="Resul2" placeholder="Resultado" required="">
                                        Resultado
                                          </div>

                                      </div>    


</fieldset>

<fieldset>
<legend>Recomendaciones</legend>
 <div class="row">
                                            <!--<div class="form-group col-md-4">
                                               <p>Delegación:
                                              <input type="text" class="form-control" name="Delegación" id="Delegación" placeholder="Municipio/Delegación"></p>
                                             </div>-->
                                             <div class="form-group col-md-11">
                                               <p>Mando:
                                              <input type="text"  maxlength="10" size="10" class="form-control" name="Mand"  placeholder="Mando" required minlength="10" maxlength="10"></p>          
                                            </div>


</div>
                                             <div class="row">
                                             <div class="form-group col-md-11">
                                          <p>Domicilio:
                                              <input type="text"  maxlength="10" size="10" class="form-control" name="Telefono2"  placeholder="Domicilio" required minlength="10" maxlength="10"></p>
                                             </div>
                                           </div>

<div class="row">
                                              <div class="form-group col-md-11">
                                                <p>Telefono:
                                              <input type="text"  maxlength="10" size="10" class="form-control" name="Telefono2"  placeholder="Telefono" required minlength="10" maxlength="10"></p>
                                             </div>

                                          </div>
                                          <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Compañero de Trabajo:
                                           <input type="text" class="form-control" name="CompaTrab" placeholder="Compañero de Trabajo" required=""></p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Domicilio:
                                           <input type="text" class="form-control" name="Domicili" placeholder="Telefono" required=""></p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Telefono 1:
                                           <input type="text" class="form-control" name="Tele" placeholder="Telefono 1" required=""></p>
                                        </div>
                                    </div>

                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Familiar que no vivia con usted:
                                           <input type="text" class="form-control" name="Fam" placeholder="Familiar" required=""></p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Domicilio:
                                           <input type="text" class="form-control" name="Dom" placeholder="Domicilio" required=""></p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                      <div class="form-group col-xs-11">
                                          <p>Telefono 1:
                                           <input type="text" class="form-control" name="Telefon" placeholder="Telefono 1" required=""></p>
                                        </div>
                                    </div>
                                     <div class="form-group-row">

                                              <button type="submit" class="btn btn-primary">GUARDAR</button>

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
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>

<style>
fieldset {
  background-color: #eeeeee;
}
legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
input {
  margin: 5px;
}
</style>
</html>
<script type="text/javascript">
   function comprobarUsuario() {
  $("#loaderIcon").show();
  jQuery.ajax({
  url: "buscarnocontrol.php",
  data:'idpersona='+$("#idpersona").val(),
  type: "POST",
  success:function(data){
    $("#resultado").html(data);
    $("#loaderIcon").hide();
  },
  error:function (){}
  });
}

</script>



<script>
    $(document).ready(function(){
        $('#datos').load('verifica.php');
    });
</script>
