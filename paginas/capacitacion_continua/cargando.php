<?php
header("Location:capacitacion.php")
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <?php
   require '../../requires/head2.php';
   require 'capacitacion_back.php';
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
                               Capacitación continua
                           </h3>
                         </div>
                       </div>
                     </div>
                 </div>
                 <div class="clearfix"></div>

                 <div class="row" >
                     <div class="col-md-12">
                         <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                             <div class="x_content ">
                               <button type="button" class="btn btn-primary" name="button" onclick="limpiarDatos()" data-toggle="modal" data-target="#myModal">Agregar</button>
                                 <!-- content starts here ////////////////////-->
                                 <div class="txt_carga" id="spinner" hidden>
                                   Buscando...
                                   <div class="loader" >
                                   </div>
                                 </div>
                                 <!--////MODAL PARA REGISTRO DEL CURSO-->
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
 <script type="text/javascript" src="capacitacion.js"></script>

 </script>