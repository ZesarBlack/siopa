<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'promocion_grado_back.php';
  if (isset($_POST['cuip_promo'])) {
    $elemento = $certificado->obtenerElemento2($_POST['cuip_promo']);
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
                      <div class="animated flipInY ">
                        <div class="tile-stats" style="border: 2px solid #000000;">
                          <h3>
                            Promoción de grado
                          </h3>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content">
                                <!-- content starts here ////////////////////-->
                                <div class="row" style="color: #09A89A;">
                                  <h3>Nombre del Elemento: <?php      echo $elemento[0]->nombre;?></h3>
                                </div>

                                <div class="row" style="color: #09A89A;">
                                  <h3>CUIP: <?php      echo $elemento[0]->cuip;?></h3 >
                                </div>

                                <div class="row" style="color: #09A89A;">
                                  <h3>Número de control: <?php     echo $elemento[0]->no_control; ?></h3>
                                </div>
                                <br>
                                <br>
                                <br>
                              <form class="" action="promocion_grado_back.php" method="post">
                                <!--///--------------------------------------------------------------->
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Número de control</div>
                                    <div class="col-sm-3">
                                        <input id="cuip" class="form form-control" onkeyup="mayus(this)" value="<?php echo $elemento[0]->cuip; ?>" name="cuip" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required readonly>
                                    </div>
                                  </div>
                                  <div class="col">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-2">Número de convocatoria</div>
                                        <div class="col-sm-3">
                                            <input id="numero_conv" class="form form-control" onkeyup="mayus(this)" value="" name="numero_conv" type="number" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                        </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Folio en la promoción</div>
                                    <div class="col-sm-3">
                                        <input id="folio_prom" class="form form-control" onkeyup="mayus(this)" value="" name="folio_prom" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Fecha de ingreso a la institución</div>
                                    <div class="col-sm-3">
                                        <input id="fecha_ingreso" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_ingreso" type="date" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Categoría actual</div>
                                    <div class="col-sm-3">
                                        <input id="categoria_actual" class="form form-control" onkeyup="mayus(this)" value="" name="categoria_actual" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Antigüedad en la categoría</div>
                                    <div class="col-sm-3">
                                        <input id="antiguedad_cate" class="form form-control" onkeyup="mayus(this)" value="" name="antiguedad_cate" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Categoría a la que aspira</div>
                                    <div class="col-sm-3">
                                        <input id="categoria_asp" class="form form-control" onkeyup="mayus(this)" value="" name="categoria_asp" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Documentación completa</div>
                                    <div class="col-sm-3">
                                      <select class="form form-control" id="documentacion" name="documentacion" style='font-size: 12pt;
                                      font-weight: bold; color: red; text-align: center;' required>
                                        <option value="SÍ">SÍ</option>
                                        <option value="NO">NO</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Estatus ante la Unidad de Asuntos Internos</div>
                                    <div class="col-sm-3">
                                        <input id="estatus_unidad" class="form form-control" onkeyup="mayus(this)" value="" name="estatus_unidad" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Estatus ante la Comisión del SPCP</div>
                                    <div class="col-sm-3">
                                        <input id="estatus_comision" class="form form-control" onkeyup="mayus(this)" value="" name="estatus_comision" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Estatus ante el Consejo Honor y Justicia</div>
                                    <div class="col-sm-3">
                                        <input id="estatus_consejo" class="form form-control" onkeyup="mayus(this)" value="" name="estatus_consejo" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Estatus ante la Contraloría Municipal</div>
                                    <div class="col-sm-3">
                                        <input id="estatus_contraloria" class="form form-control" onkeyup="mayus(this)" value="" name="estatus_contraloria" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Fecha de aplicación de examen</div>
                                    <div class="col-sm-3">
                                        <input id="fecha_a_examen" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_a_examen" type="date" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Resultado del examen</div>
                                    <div class="col-sm-3">
                                        <input id="resultado_examen" class="form form-control" onkeyup="mayus(this)" value="" name="resultado_examen" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">No. de oficio de comisión para la evaluación de control de confianza</div>
                                    <div class="col-sm-3">
                                        <input id="n_ofisio_comision" class="form form-control" onkeyup="mayus(this)" value="" name="n_ofisio_comision" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Fecha de programación de la evaluación </div>
                                    <div class="col-sm-3">
                                        <input id="fecha_progra_eva" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_progra_eva" type="date" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Resultado de la evaluación</div>
                                    <div class="col-sm-3">
                                        <input id="resultado_eva" class="form form-control" onkeyup="mayus(this)" value="" name="resultado_eva" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Número de Oficio del Centro de Evaluación </div>
                                    <div class="col-sm-3">
                                        <input id="numero_oficio_centro" class="form form-control" onkeyup="mayus(this)" value="" name="numero_oficio_centro" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Fecha de emisión de hoja de resultado.</div>
                                    <div class="col-sm-3">
                                        <input id="fecha_emision_hoja_res" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_emision_hoja_res" type="date" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">Número de sesión de la Comisión del SPCP en que se aprueba la entrega de la Constancia de Grado</div>
                                    <div class="col-sm-3">
                                        <input id="numero_sesion_comision" class="form form-control" onkeyup="mayus(this)" value="" name="numero_sesion_comision" type="text" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class="col">
                                    <div class="col-sm-2">Fecha de emisión de la Constancia de Grado.</div>
                                    <div class="col-sm-3">
                                        <input id="fecha_emision_constancia" class="form form-control" onkeyup="mayus(this)" value="" name="fecha_emision_constancia" type="date" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' maxlength="20" required>
                                    </div>
                                  </div>
                                </div>
                                <!--///--------------------------------------------------------------->
                                <br>
                                <button type="submit" class="btn btn-primary" name="button">Actualizar</button>
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
<script type="text/javascript" src="promocion.js">

</script>
