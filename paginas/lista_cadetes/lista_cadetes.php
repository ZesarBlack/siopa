<?php
require 'lista_cadetes_back.php';
//$listacadete = new ListCadete();
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <?php require '../../requires/head2.php';
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
                             Aspirantes registrados
                         </h3>
                     </div>
                 </div>
                 <div class="clearfix"></div>
                 <div class="row" >
                     <div class="col-md-12">
                         <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                             <div class="x_content ">
                               <div class="row">
                                <h2>Selecciones el tipo de reporte</h2>
                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                   <form class="" action="apto.php" method="post">
                                     <button type="submit" class="btn btn-primary" name="button">Descargar listado de Aspirantes</button>
                                   </form>
                                 </div>
                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                   <select class="form-control" name="tbusqueda" id="tbusqueda">
                                     <option value="todos">Todos</option>
                                     <option value="masculino">Masculino</option>
                                     <option value="femenino">Femenino</option>
                                     <option value="reingreso">Reingresos</option>
                                     <option value="nuevos">Nuevos ingresos</option>
                                     <option value="exp">Expolicia y Exmilitar</option>
                                   </select>
                                 </div>
                               </div>
                               <br>
                               <div class="row">
                                 <h2>Selecciones el tipo de busqueda</h2>
                                 <div class="col-md-3">
                                   <select class="form-control" id="tipo" name="tipo">
                                     <option value="" selected>Seleccione el tipo de busqueda</option>
                                     <option value="genero" >Genero</option>
                                     <option value="edad">Edad</option>
                                     <option value="reingreso">Tipo ingreso</option>
                                     <option value="nombre">Nombre</option>
                                     <option value="folio">Folio</option>
                                   </select>
                                 </div>
                                 <div class="col-md-3">
                                   <input type="text"  placeholder="Inserte su busqueda" class="form form-control" name="busqueda" id="busqueda" value="">
                                 </div>
                               </div>

                               <div class="row">
                                 <br>
                                 <table class="table table-hover table-condensed table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Apellido Paterno</th>
                                      <th scope="col">Apellido Materno</th>
                                      <th scope="col">CURP</th>
                                      <th scope="col">Edad</th>
                                      <th scope="col">Tipo ingreso</th>
                                      <th scope="col">Género</th>
                                      <th scope="col">Folio</th>
                                    </tr>
                                  </thead>
                                  <tbody id="datos">
                                  </tbody>
                                  <?php
                                  if (isset($_GET['id'])) {
                                    $listaCadetes->obtenerCadete($_GET['id']);
                                  }
                                  ?>
                                  <?php   //$listaCadetes->contarAspirantes($lista1); ?>
                                 </table>
                               </div>
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
 <script type="text/javascript" src="lista_cadetes.js"></script>
