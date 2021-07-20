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
                            Registro: cedula del cadete
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <div class="col-md-1" style="">
                                </div>
                                <div class="col-md-10">
                                  <form name="form1" method="POST" action="capturar.php">

                                    <div class="row tile_count">
                                         <div class="col-md-5 col-sm-2 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                                id="cuip" placeholder="Cuip" name="cuip" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required maxlength="20">
                                                CUIP
                                                <div class="help-info"></div>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                           <input type="date" class="form-control has-feedback-left"
                                                 id="llenado" placeholder="Fecha Llenado" name="llenado" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                                  Fecha de llenado
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>
                                    </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="entidad" placeholder="Entidad" name="entidad" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                              Entidad
                                              <div class="help-info"></div>
                                              <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="ads" placeholder="Institución de Adscripción" name="ads" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                              Institución de Adscripción
                                              <div class="help-info"></div>
                                              <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-5 col-sm-2 form-group has-feedback">
                                         <select class="form-control has-feedback-left" id="perfil" name="perfil" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                           <option>Perfil Solicitado</option>
                                           <option value="POLICIA MINISTERIAL">POLICIA MINISTERIAL</option>
                                           <option value="MINISTERIO PÚBLICO">MINISTERIO PÚBLICO</option>
                                           <option value="POLICIAS PREVENTIVOS">POLICIAS PREVENTIVOS</option>
                                           <option value="GUARDIA Y CUSTODIO PENITENCIARIO">GUARDIA Y CUSTODIO PENITENCIARIO</option>
                                         </select>
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="date" class="form-control has-feedback-left"
                                               id="llenadoe" placeholder="Fecha Llenado" name="llenadoe" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required>
                                                Fecha de Llenado
                                                <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                  </div>
                                </br>


                                  <h3 class="card-title">Datos Personales</h3>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="nombre" placeholder="Nombre(s)" name="nombre" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                              Nombre(s)
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="paterno" placeholder="Apellido Paterno" name="paterno" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                              Apellido Paterno
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="materno" placeholder="Apellido Materno" name="materno" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                              Apellido Materno
                                              <div class="help-info"></div>
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-5 form-group has-feedback">
                                        <input type="date" class="form-control has-feedback-left"
                                              id="fechan" placeholder="Fecha de Nacimiento" name="fechan" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Fecha de Nacimiento
                                              <div class="help-info"></div>
                                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-5 form-group has-feedback">
                                          <select class="form-control has-feedback-left" name="sexo" id="sexo" placeholder="Sexo" name="sexo" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required>
                                            <option>Sexo</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                          </select>
                                          <div class="help-info"></div>
                                          <span class="fa fa-male form-control-feedback left" aria-hidden="true">
                                          </span>
                                        </div>
                                  </div>


                                  <div class="row tile_count">
                                       <div class="col-md-5 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="curp" placeholder="CURP" name="curp" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="18">
                                              CURP
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-5 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="rfc" placeholder="RFC" name="rfc" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required maxlength="18">
                                                RFC
                                                <div class="help-info"></div>
                                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="clave" placeholder="Clave de Elector" name="clave" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="19">
                                              Clave de Elector
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="pasap" placeholder="Pasaporte" name="pasap" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="19">
                                              Pasaporte
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="cartilla" placeholder="Cartilla" name="cartilla" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="10">
                                              Cartilla S.M.N
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count">
                                       <div class="col-md-5 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="licencia" placeholder="Licencia de Conducir" name="licencia" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required maxlength="10">
                                              Licencia de Conducir
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-5 form-group has-feedback">
                                         <input type="date" class="form-control has-feedback-left"
                                               id="vigen" placeholder="Vigencia" name="vigen" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required>
                                                Vigencia
                                                <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                  </div>

                                <div class="row tile_count">
                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                    <label>Nacionalidad</label> &nbsp; &nbsp; &nbsp;
                                    <div class="">
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                    <label for="Nacimiento">Nacimiento</label>
                                    <input type="radio" name="naciona" id="naciona" value="Nacimiento" required> &nbsp; &nbsp;
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                    <label for="Naturalizado">Naturalizado</label>
                                    <input type="radio" name="naciona" id="naciona" value="Naturalizado" > &nbsp; &nbsp;
                                  </div>
                                  <div class="col-md-2 col-sm-3 col-xs-3 form-group has-feedback">
                                    <label for="Extranjero">Extranjero</label>
                                    <input type="radio" name="naciona" id="naciona" value="Extranjero" > &nbsp; &nbsp;
                                  </div>

                                  <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="date" class="form-control has-feedback-left"
                                           id="fechanat" placeholder="Fecha" name="fechanat" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Fecha de naturalización
                                            <div class="help-info"></div>
                                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>

                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="paisn" placeholder="País de Nacimiento" name="paisn" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            País de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="entidadn" placeholder="Entidad de Nacimiento" name="entidadn" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            Entidad de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="munin" placeholder="Municipio de Nacimiento" name="munin" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            Municipio de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="ciudadn" placeholder="Ciudad de Nacimiento" name="ciudadn" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            Ciudad de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="nacion" placeholder="Nacionalidad" name="nacion" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            Nacionalidad
                                            <div class="help-info"></div>
                                            <span class="fa fa-globe form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="estadoc" placeholder="Estado Civil" name="estadoc" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                            Estado Civil
                                            <div class="help-info"></div>
                                            <span class="fa fa-users form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>
                              </br>


                        <h3 class="card-title">Desarrollo Academico</h3>
                        <h2>Nivel de estudios</h2>
                      </br>
                        <!-- #################################################   -->

                                <?php
                                /*
                                    if(isset($_POST['nivele'])){
                                       $nivel = $_POST['nivele'];
                                    }else{
                                       $nivel = "";
                                    }
                                    */
                                ?>

                                <div class="row tile_count">
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Sin escolaridad">Sin escolaridad</label>
                                    <input type="radio" name="nivele" id="nivele" value="Sin escolaridad"> <?php //if($nivel == "Sin escolaridad") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Carrera técnica Completa">Carrera técnica Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Carrera técnica Completa"> <?php/// if($nivel == "Carrera técnica Completa") echo "checked"; ?>
                                    <div class="col-4">
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Especialidad Completa">Especialidad Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Especialidad Completa"> <?php// if($nivel == "Especialidad Completa") echo "checked"; ?>
                                  <div class="col-2">
                                  </div>
                                </div>
                              </div>

                              <div class="row tile_count">
                                 <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Primaria Incompleta">Primaria Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Primaria Incompleta"> <?php// if($nivel == "Primaria Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Bachillerato Incompleta">Bachillerato Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Bachillerato Incompleta"> <?php// if($nivel == "Bachillerato Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Maestría Incompleta">Maestría Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Maestría Incompleta"> <?php// if($nivel == "Maestría Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                              </div>

                              <div class="row tile_count">
                                 <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Primaria Completa">Primaria Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Primaria Completa"> <?php// if($nivel == "Primaria Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Bachillerato Completa">Bachillerato Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Bachillerato Completa"> <?php// if($nivel == "Bachillerato Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Maestría Completa">Maestría Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Maestría Completa"> <?php// if($nivel == "Maestría Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                              </div>

                              <div class="row tile_count">
                                 <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Secundaria Incompleta">Secundaria Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Secundaria Incompleta"> <?php// if($nivel == "Secundaria Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Licenciatura Incompleta">Licenciatura Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Licenciatura Incompleta"> <?php// if($nivel == "Licenciatura Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Doctorado Incompleta">Doctorado Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Doctorado Incompleta"> <?php// if($nivel == "Doctorado Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                              </div>

                              <div class="row tile_count">
                                 <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Secundaria Completa">Secundaria Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Secundaria Completa"> <?php// if($nivel == "Secundaria Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Licenciatura Completa">Licenciatura Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Licenciatura Completa"> <?php// if($nivel == "Licenciatura Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Doctorado Completa">Doctorado Completa</label>
                                    <input type="radio" name="nivele" id="nivele" value="Doctorado Completa"> <?php// if($nivel == "Doctorado Completa") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                              </div>

                              <div class="row tile_count">
                                 <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Carrera técnica Incompleta">Carrera técnica Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Carrera técnica Incompleta"> <?php// if($nivel == "Carrera técnica Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Especialidad Incompleta">Especialidad Incompleta</label>
                                    <input type="radio" name="nivele" id="nivele" value="Especialidad Incompleta"> <?php// if($nivel == "Especialidad Incompleta") echo "checked"; ?>
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-4 form-group has-feedback">
                                    <label for="Analfabeto (a)">Analfabeto (a)</label>
                                    <input type="radio" name="nivele" id="nivele" value="Analfabeto (a)"> <?php// if($nivel == "Analfabeto (a)") echo "checked"; ?>

                                    <div class="">
                                    </div>
                                </div>
                              </div>
                            </br>


                        <h3 class="card-title">Datos Personales</h3>

                              <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                         id="escuela" placeholder="Escuela" name="escuela" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                         Escuela
                                         <div class="help-info"></div>
                                         <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                         </span>
                                  </div>
                              </div>

                              <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                         id="espec" placeholder="Especialidad o estudio" name="espec" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                         Especialidad o estudio
                                         <div class="help-info"></div>
                                         <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                         </span>
                                  </div>
                              </div>

                              <div class="row tile_count">
                                  <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                         id="cedp" placeholder="N° Cédula Profesional" name="cedp" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                         N° Cédula Profesional
                                         <div class="help-info"></div>
                                         <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                         </span>
                                  </div>
                              </div>

                              <div class="row tile_count">
                                   <div class="col-md-5 col-sm-4 form-group has-feedback">
                                    <input type="date" class="form-control has-feedback-left"
                                          id="fechai" placeholder="Fecha Inicio" name="fechai" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center;' required>
                                          Fecha de Inicio
                                          <div class="help-info"></div>
                                          <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                                  <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="date" class="form-control has-feedback-left"
                                           id="fechat" placeholder="Fecha Término" name="fechat" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Fecha de termino
                                            <div class="help-info"></div>
                                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                              </div>

                      <!--  ################################################   -->

                                <?php
                                /*
                                    if(isset($_POST['registro'])){
                                      $regi = $_POST['registro'];
                                    }else{
                                      $regi = "";
                                    }
                                    */
                                ?>

                              <div class="row tile_count">
                                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                      <label>Registro SEP</label>
                                    </div>
                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                     <label for="Si">SI</label>
                                     <input type="radio" name="registro" id="registro" value="Si" required> <?php// if($regi == "Si") echo "checked"; ?>
                                     <div class="">
                                     </div>
                                 </div>

                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                     <label for="No">NO</label>
                                     <input type="radio" name="registro" id="registro" value="No" required> <?php// if($regi == "No") echo "checked"; ?>
                                     <div class="">
                                     </div>
                                 </div>
                              </div>

                              <div class="row tile_count">
                                   <div class="col-md-5 col-sm-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="certif" placeholder="N° de certificado" name="certif" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                          N° de certificado
                                          <div class="help-info"></div>
                                          <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                                  <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="prom" placeholder="Promedio" name="prom" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Promedio
                                            <div class="help-info"></div>
                                            <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                              </div>
                            </br>


                         <h3 class="card-title">Domicilio Actual</h3>

                               <div class="row tile_count">
                                   <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                          id="calle" placeholder="Calle" name="calle" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center;' required>
                                          Calle
                                          <div class="help-info"></div>
                                          <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                          </span>
                                   </div>
                               </div>

                               <div class="row tile_count">
                                    <div class="col-md-5 col-sm-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="ext" placeholder="N° exterior" name="ext" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required>
                                           N° exterior
                                           <div class="help-info"></div>
                                           <span class="fa fa-sort-numeric-desc form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                   <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="int" placeholder="N° interior" name="int" style='font-size: 12pt;
                                             font-weight: bold; color: red; text-align: center;' required>
                                             N° interior
                                             <div class="help-info"></div>
                                             <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true">
                                             </span>
                                     </div>
                               </div>

                               <div class="row tile_count">
                                    <div class="col-md-10 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="colonia" placeholder="Colonia" name="colonia" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                           Colonia
                                           <div class="help-info"></div>
                                           <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                               </div>
                               <div class="row tile_count">
                                 <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="entre" placeholder="Entre la calle" name="entre" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                           Entre la calle
                                           <div class="help-info"></div>
                                           <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                   <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="ycalle" placeholder="Y la calle" name="ycalle" style='font-size: 12pt;
                                             font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                             Y la calle
                                             <div class="help-info"></div>
                                             <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                             </span>
                                    </div>
                               </div>

                               <div class="row tile_count">
                                    <div class="col-md-5 col-sm-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="codpostal" placeholder="Código Postal" name="codpostal" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required maxlength="5">
                                           Código Postal
                                           <div class="help-info"></div>
                                           <span class="fa fa-home form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                   <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="telef" placeholder="Teléfono" name="telef" style='font-size: 12pt;
                                             font-weight: bold; color: red; text-align: center;' required maxlength="10">
                                             Teléfono
                                             <div class="help-info"></div>
                                             <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                             </span>
                                     </div>
                               </div>

                               <div class="row tile_count">
                                    <div class="col-md-5 col-sm-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="entidadf" placeholder="Entidad federativa" name="entidadf" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required maxlength="">
                                           Entidad federativa
                                           <div class="help-info"></div>
                                           <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                   <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="municipio" placeholder="Municipio" name="municipio" style='font-size: 12pt;
                                             font-weight: bold; color: red; text-align: center;' required maxlength="45">
                                             Municipio
                                             <div class="help-info"></div>
                                             <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                             </span>
                                     </div>
                               </div>
                             </br>

                      <!-- ###########################################################3    -->

                                  <h3 class="card-title">Documentación</h3>
                                        <br>
                                        <div class="row tile_count">
                                        <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                        <label for="tipo">Tipo:</label> &nbsp; &nbsp; &nbsp;
                                          <select name="tipo" id="tipo">
                                            <option value="Policía ministerial">Policía ministerial</option>
                                            <option value="Ministerio publico">Ministerio publico</option>
                                            <option value="Peritos">Peritos</option>
                                            <option value="Preventivos y Custodia">Policias prventivos de guardia y custodia penitenciaria</option>
                                          </select>
                                        </br>
                                        </br>
                                      </div>
                                    </div>

                          <font color="red" size="3px"> Original y/o Copia </font>

                                <div class="row tile_count">
                                     <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="actad" placeholder="Acta de Nacimiento" name="actad" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Acta de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="penad" placeholder="No Penales" name="penad" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Constancia Antecedentes No Penales
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                </div>

                                <div class="row tile_count">
                                  <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="cartd" placeholder="Cartilla" name="cartd" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Cartilla S.M.N.
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="elecd" placeholder="Credencial de Elector" name="elecd" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required>
                                           Credencial de elector
                                           <div class="help-info"></div>
                                           <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                </div>

                                <div class="row tile_count">
                                    <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                       <input type="text" class="form-control has-feedback-left"
                                             id="bachid" placeholder="Certificado Bachiller" name="bachid" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' required>
                                              Certificado Bachiller
                                              <div class="help-info"></div>
                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                      <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left"
                                               id="licend" placeholder="Licencia de Conducir" name="licend" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' required>
                                                Licencia de Conducir
                                                <div class="help-info"></div>
                                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                </span>
                                        </div>
                                </div>


                                <div class="row tile_count">
                                  <div class="col-md-5 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="cedd" placeholder="Cédula Profesional" name="cedd" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Cédula Profesional
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>
                            </br>



                            <div class="row tile_count">
                                 <div class="col-md-5 col-sm-2 form-group has-feedback">
                                  <input type="text" class="form-control has-feedback-left"
                                        id="genera" placeholder="Generación Aspirante" name="genera" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' required>
                                        Asignar generación del aspirante
                                        <div class="help-info"></div>
                                        <span class="fa fa-object-group form-control-feedback left" aria-hidden="true">
                                        </span>
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
    <?php require '../../requires/script_pag.php';   ?>
  </body>
</html>
