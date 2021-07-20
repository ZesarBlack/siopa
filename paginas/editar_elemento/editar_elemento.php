<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'editar_elemento_back.php';
  $elemento = new Elemento();
  if (isset($_POST['id'])) {
    // code...
  $datos = $elemento->obtenerInformacion($_POST['id']);
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
                            Edicion de información
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form name="form1" method="POST" action="editar_elemento_back.php" >
                                        <div class="row tile_count">
                                          <div class="col-md-4 col-md-offset-0 form-group has-feedback">
                                                 <input type="date" class="form-control has-feedback-right"
                                                       id="llenado" placeholder="Fecha Llenado" name="llenado" style='font-size: 12pt;
                                                        font-weight: bold; color: red; text-align: center;' value="<?php echo $datos[1] ;?>" required>
                                                        Fecha de llenado
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                        </div>
                                    <div class="row tile_count">
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                              <label>CONVOCATORIA:</label>
                                              <div class="">
                                              </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                              <label for="Nacimiento">Nuevo Ingreso</label>
                                              <input type="radio" name="tipoIngreso" id="naciona" value="Nuevo Ingreso" checked required>
                                              <div class="">
                                              </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                              <label for="Naturalizado">Reingreso</label>
                                              <input type="radio" name="tipoIngreso" id="naciona" value="Reingreso" >
                                              <div class="">
                                              </div>
                                             </div>
                                            <div class="col-md-6   form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" value="<?php echo $datos[3] ?>"
                                                  id="folio" placeholder="00 - A000" name="folio" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' maxlength="12" required>
                                                  Folio
                                                <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                       </div>
                                      </div>
                                    </br>
                                      <h3 class="card-title">Datos Personales</h3>
                                      <div class="row tile_count">
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="paterno" placeholder="Apellido Paterno" value="<?php echo $datos[4] ?>" name="paterno" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                  Apellido Paterno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>

                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="materno" placeholder="Apellido Materno" value="<?php echo $datos[5] ?>" name="materno" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                  Apellido Materno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>

                                         <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="nombre" placeholder="Nombre(s)" value="<?php echo $datos[6] ?>" name="nombre" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                  Nombre(s)
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                      </div>


                                      <div class="row tile_count">
                                           <div class="col-md-4 form-group has-feedback">
                                            <input type="date" class="form-control has-feedback-left"
                                                  id="fechan" placeholder="Fecha de Nacimiento" value="<?php echo $datos[7] ?>" name="fechan" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' required>
                                                  Fecha de Nacimiento
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                          <div class="col-md-4 form-group has-feedback">
                                           <input type="text" class="form-control has-feedback-left"
                                                 id="edad" placeholder="Edad" value="<?php echo $datos[8] ?>" name="edad" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center;' required>
                                                 Fecha de Nacimiento
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                 </span>
                                         </div>
                                         <!--
                                          <div class="col-sm-4 form-group has-feedback">
                                             <input type="number" class="form-control has-feedback-left"
                                                   id="edad" placeholder="Edad" name="edad" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;' max="99" required disabled>
                                                    Edad
                                                    <div class="help-info"></div>
                                                    <span class="fa fa-male form-control-feedback left" aria-hidden="true">
                                                    </span>
                                            </div>-->
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label>Genero:</label>
                                        <div class="">
                                        </div>
                                      </div>
                                      <?php
                                      if ( $datos[9] == "MASCULINO") {
                                        // code...
                                        echo '
                                        <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                          <label for="Nacimiento">M</label>
                                          <input type="radio" name="genero"  id="naciona" value="MASCULINO" required checked>
                                          <div class="">
                                          </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                          <label for="Naturalizado">F</label>
                                          <input type="radio" name="genero" id="naciona" value="FEMENINO" >
                                          <div class="">
                                          </div>
                                        </div>
                                       </div>
                                        ';
                                      }else {
                                        echo '
                                        <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                          <label for="Nacimiento">M</label>
                                          <input type="radio" name="genero"  id="naciona" value="MASCULINO" required>
                                          <div class="">
                                          </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                          <label for="Naturalizado">F</label>
                                          <input type="radio" name="genero" id="naciona" value="FEMENINO" checked>
                                          <div class="">
                                          </div>
                                        </div>
                                       </div>
                                        ';
                                      }

                                       ?>


                                      <div class="row tile_count">
                                           <div class="col-md-4 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="curp" placeholder="CURP" value="<?php echo $datos[10] ?>"  name="curp" maxlength="18" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                  CURP
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                            <div class="col-sm-8 form-group has-feedback">
                                             <input type="email" class="form-control has-feedback-left"
                                                   id="correo" placeholder="Correo Electronico" value="<?php echo $datos[11] ?>" name="correo" maxlength="45" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;' required>
                                                    Correo Electronico
                                                    <div class="help-info"></div>
                                                    <span class="fa fa-male form-control-feedback left" aria-hidden="true">
                                                    </span>
                                            </div>
                                       </div>

                                       <div class="row tile_count">
                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                                id="celular" placeholder="Celular" name="celular" value="<?php echo $datos[12] ?>" maxlength="10" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center;' >
                                                 Tel. celular
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                                 </span>
                                           </div>
                                           <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                id="telef-1" placeholder="Teléfono 1" value="<?php echo $datos[13] ?>" name="telef-1" maxlength="10" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center;' >
                                                 Teléfono 1
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                                 </span>
                                           </div>
                                           <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                id="telef-2" placeholder="Teléfono 2" value="<?php echo $datos[14] ?>" name="telef-2" maxlength="10" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center;' >
                                                 Teléfono 2
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                                 </span>
                                           </div>
                                       </div>

                                       <div class="row tile_count">
                                           <div class="col-md-6 form-group has-feedback">
                                           <form action="">
                                             <select class="form-control has-feedback-left" name="grado_es" id="grado_es" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' maxlength="45" required>
                                               <option value="<?php echo $datos[15] ?>"><?php echo $datos[15] ?></option>
                                               <option value="BACHILLERATO">BACHILLERATO</option>
                                               <option value="LICENCIATURA">LICENCIATURA</option>
                                               <option value="MAESTRIA">MAESTRIA</option>
                                               <option value="DOCTORADO">DOCTORADO</option>
                                             </select>
                                             Ultimo grado de estudios

                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                       </div>

                                           <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>Ex policia o ex militar: </label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[16] == "SI") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Sí</label>
                                               <input type="radio" name="exPoli" id="RadioSi" value="SI" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="exPoli" id="RadioNo" value="NO" >
                                                <div class="">
                                                </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">Activo</label>
                                                <input type="radio" name="exPoli" id="RadioActivo" value="Activo" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }elseif($datos[16] == "NO"){
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Sí</label>
                                               <input type="radio" name="exPoli" id="RadioSi" value="SI"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="exPoli" id="RadioNo" value="NO" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">Activo</label>
                                                <input type="radio" name="exPoli" id="RadioActivo" value="Activo" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }elseif ($datos[16] == "Activo") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Sí</label>
                                               <input type="radio" name="exPoli" id="RadioSi" value="SI"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="exPoli" id="RadioNo" value="NO" >
                                                <div class="">
                                                </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">Activo</label>
                                                <input type="radio" name="exPoli" id="RadioActivo" value="Activo" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                       </div>

                                       <div class="row tile_count">
                                       <div class="col-md-4 form-group has-feedback">
                                           <form action="">
                                             <select class="form-control has-feedback-left" name="estadoCivil" id="" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'  required>
                                               <option value="<?php echo $datos[17] ?>"><?php echo $datos[17] ?></option>
                                               <option value="SOLTERO">SOLTERO</option>
                                               <option value="CASADO">CASADO</option>
                                               <option value="VIUDO">VIUDO</option>
                                               <option value="DIVORCIADO">DIVORCIADO</option>
                                               <option value="UNION LIBRE">UNION LIBRE</option>
                                             </select>
                                             Estado civil

                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                       </div>

                                            <div class="col-md-4 form-group has-feedback">
                                           <form action="">
                                             <select class="form-control has-feedback-left" name="medioInfo" id="" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'  required>
                                               <option value="<?php echo $datos[18] ?>"><?php echo $datos[18] ?></option>
                                               <option value="REDES SOCIALES">REDES SOCIALES</option>
                                               <option value="AMIGOS O FAMILIA">AMIGOS O FAMILIA</option>
                                               <option value="INTERNET">INTERNET</option>
                                               <option value="TV O RADIO">TV O RADIO</option>
                                               <option value="ACADEMIA">ACADEMIA</option>
                                             </select>
                                             Medio por el cual se entero del empleo

                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                       </div>

                                            <div class="col-md-4 form-group has-feedback">
                                           <form action="">
                                             <select class="form-control has-feedback-left" name="dependencia_anterior" id="dependencia_anterior" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                               <option value="<?php echo $datos[19] ?>"><?php echo $datos[19] ?></option>
                                               <option value="FEDERAL">FEDERAL</option>
                                               <option value="ESTATAL">ESTATAL</option>
                                               <option value="GUARDIA NACIONAL">GUARDIA NACIONAL</option>
                                               <option value="MUNICIPAL">MUNICIPAL</option>
                                             </select>
                                             Dependencia a la que pertenecia

                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                       </div>



                                       </div>


                                    <h3 class="card-title">Domicilio Actual</h3>

                                   <div class="row tile_count">
                                       <div class="col-md-12 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                              id="calle" placeholder="Calle" value="<?php echo $datos[20] ?>" name="calle" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);"  maxlength="45" required>
                                              Calle
                                              <div class="help-info"></div>
                                              <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                              </span>
                                       </div>
                                   </div>

                                   <div class="row tile_count">
                                        <div class="col-md-4 col-sm-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="ext" placeholder="N° exterior" value="<?php echo $datos[21] ?>" name="ext" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" maxlength="15" required>
                                               N° exterior
                                               <div class="help-info"></div>
                                               <span class="fa fa-sort-numeric-desc form-control-feedback left" aria-hidden="true">
                                               </span>
                                       </div>
                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                                id="int" placeholder="N° interior" value="<?php echo $datos[22] ?>" name="int" maxlength="15" style='font-size:  12pt;
                                                 font-weight: bold; color: red; text-align: center;'  onkeyup="mayus(this);" >
                                                 N° interior
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true">
                                                 </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="codpostal" placeholder="Código Postal" value="<?php echo $datos[23] ?>" name="codpostal" maxlength="5" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center;' required>
                                               Código Postal
                                               <div class="help-info"></div>
                                               <span class="fa fa-home form-control-feedback left" aria-hidden="true">
                                               </span>
                                       </div>
                                   </div>
                                   <div class="row tile_count">
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="colonia" placeholder="Colonia" name="colonia" value="<?php echo $datos[24] ?>" maxlength="45" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center; text-transform:uppercase;'  onkeyup="mayus(this);" required>
                                               Colonia
                                               <div class="help-info"></div>
                                               <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                               </span>
                                       </div>

                                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                                id="municipio" placeholder="Municipio" name="municipio" value="<?php echo $datos[25] ?>" maxlength="45" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center;text-transform:uppercase;'  onkeyup="mayus(this);" required>
                                                 Municipio
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                                 </span>
                                         </div>

                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                                id="estado" placeholder="Estado" name="estado" value="<?php echo $datos[26] ?>"  maxlength="45" style='font-size: 12pt;
                                                 font-weight: bold; color: red; text-align: center; text-transform:uppercase;'  onkeyup="mayus(this);" required>
                                                 Estado
                                                 <div class="help-info"></div>
                                                 <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                                 </span>
                                         </div>

                                    </div>



                            <h3 class="card-title">Entrega de Documentos </h3>


                                       <div class="row tile_count">

                                           <div class="col-md-5  col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>1.Solicitud de empleo con fotografia, escrita de puño y letra.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[27] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="solicitud_completa" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="solicitud_completa" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="solicitud_completa" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="solicitud_completa" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                            <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[28] ?>" name="solicitud_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                       </div>



                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>2.Copia de acta de nacimiento de reciente expedición.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[29] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="acta_nac" id="" value="Si"  checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback" >
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="acta_nac" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="acta_nac" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback" >
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="acta_nac" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>
                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[30] ?>" name="acta_nac_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                          </div>

                                           <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>3.Clave unica de registro de población(CURP).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[31] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_curp" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_curp" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_curp" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_curp" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[32] ?>" name="doc_curp_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>4.Identificación oficial con fotografia vigente (INE). </label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[33] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_id" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_id" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_id" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_id" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>


                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[34] ?>" name="doc_id_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>5.Licencia de manejo vigente(chofer o automivilista).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[35] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_licencia" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_licencia" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="doc_licencia" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="doc_licencia" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[36] ?>" name="doc_licencia_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;'>
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>6.Constancia vigente de No Antecedentes Penales.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[37] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="const_ante" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="const_ante" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="const_ante" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="const_ante" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[38] ?>" name="const_ante_observacion"  maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>7.Comprobante de estudios (minimo bachiller, preparatoria).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[39] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="comp_estudios" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="comp_estudios" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="comp_estudios" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="comp_estudios" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>


                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[40] ?>" name="comp_estudios_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>8.Cartilla liberada del SMN.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[41] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="cartilla" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="cartilla" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="cartilla" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="cartilla" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[42] ?>" name="cartilla_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>9.Constancia de NO estar suspendido o inhabilitado.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[43] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="const_no_sus" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="const_no_sus" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="const_no_sus" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="const_no_sus" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[44] ?>" name="const_no_sus_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>10.Baja voluntaria de las Fuerzas Armadas, Seguridad Publica o Privada.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[45] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="baja_voluntaria" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="baja_voluntaria" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="baja_voluntaria" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="baja_voluntaria" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>


                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[46] ?>" name="baja_voluntaria_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>11.Comprobante de domicilio vigente.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[47] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="comp_domicilio" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="comp_domicilio" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="comp_domicilio" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="comp_domicilio" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>


                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[48] ?>" name="comp_domicilio_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>12.Tres referencias personales(no familiares).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[49] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="referencias" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="referencias" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="referencias" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="referencias" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[50] ?>" name="referencias_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>13.Curriculum vitae con fotografia vigente.</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[51] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="curriculum" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="curriculum" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="curriculum" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="curriculum" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[52] ?>" name="curriculum_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>14.Registro Federal de Contribuyentes (RFC).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[53] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="rfc" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="rfc" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="rfc" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="rfc" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>


                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[54] ?>" name="rfc_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>

                                        </div>

                                        <div class="row tile_count">

                                           <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                             <label>15.Numero de Seguridad Social (IMSS).</label>
                                             <div class="">
                                             </div>
                                           </div>
                                           <?php
                                           if ($datos[55] == "Si") {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="imss" id="" value="Si" checked required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="imss" id="" value="No" >
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }else {
                                             echo '
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                               <label for="Nacimiento">Si</label>
                                               <input type="radio" name="imss" id="" value="Si"  required>
                                               <div class="">
                                               </div>
                                             </div>
                                             <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Naturalizado">No</label>
                                                <input type="radio" name="imss" id="" value="No" checked>
                                                <div class="">
                                                </div>
                                             </div>
                                             ';
                                           }
                                            ?>

                                           <div class="col-md-5 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                  id="" placeholder="Observaciones" value="<?php echo $datos[56] ?>" name="imss_observacion" maxlength="45" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center; text-transform:uppercase;' >
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                        </div>

                                    <div class="row tile_count">
                                       <div class="col-xs-10 tile_stats_count">
                                                 <div style="text-align:center;">
                                                    <button type="submit" name="guardar" id="guardar" class="btn btn-primary" style="background-color:green; width:20%;  ">Guardar</button>
                                                 </div>
                                       </div>
                                     </div>
                                   </div>
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
  </body>
</html>
<script type="text/javascript" src="editar.js"></script>
