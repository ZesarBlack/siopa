<!DOCTYPE html>
<html lang="en">
<head>
  <<?php require '../../requires/head2.php'; ?>
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="curso.js"></script>
  <script src="../../requires/jquery.min.js"></script>

</head>
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


          <div class="row" style="margin-top:2em;">
          <div class="container-fluid" style="background-color:#ffffff; margin-left:2em; margin-right:2em;">

              <div class="row" style="margin:auto; margin-top:2rem" >

          <center><h1>Evaluaciones</h1></center>

               <form action="evaluacion_back.php" method="post" >
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Opertivo</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Academia</label>
                </div>



                <div class="form-group">
                  <label for="formGroupExampleInput">Buscar</label>
                  <input type="text" class="form-control" id="BuscarNombre" name="BuscarNombre" placeholder="Nombre">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre de la evaluacion</label>
                  <center><input type="text" class="form-control" name="NombreCurso" id="NombreCurso" placeholder=""></center>
                </div>

              <div class="form-row">

                  <div class="form-group col-md-6">
               <label for="formGroupExampleInput">Periodo del</label>
                  <input class="form-control" type="date" value="2020-08-19" id="NombreCurso" name="FechaInicio">
                  </div>

                  <div class="form-group col-md-6">
                  <label for="formGroupExampleInput">Al</label>
                  <input class="form-control" type="date" value="2020-08-19" id="NombreCurso" name="FechaFin">
                  </div>
                  </div>


                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="formGroupExampleInput">Duracion horas</label>
                    <input type="number" class="form-control" placeholder="" name="Horas" id="NombreCurso">
                    </div>
                  <div class="form-group col-md-6">
                  <label for="formGroupExampleInput">Valor curricular</label>
                    <input type="text" class="form-control" placeholder="" name="Valor" id="NombreCurso">
                  </div>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput">Lugar</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="Lugar" id="NombreCurso">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Entidad evaluadora</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="Entidad" id="NombreCurso">
                </div>


              <div class="form-group">
                  <label for="exampleTextarea">Observaciones</label>
                  <textarea class="form-control" name="Observaciones" id="NombreCurso" rows="3"></textarea>
              </div>

              <div class="input-group mb-12">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="NombreCurso" name="FileName">
              </div>
              </div>

              <button type="submit" class="btn btn-primary">Resgistrar</button>

              </form>


         </div>

         </div>

          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/scripts.php'; ?>
  </body>

</html>
