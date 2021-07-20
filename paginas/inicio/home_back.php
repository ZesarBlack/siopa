<?php
/**
 *
 */
class Materias
{

  function obtenerMaterias()
  {
      include '../../requires/conexion.php';
      $query= "SELECT * FROM cursos";
      $resultado = $conn->query($query);
      //$conn->query("SET CHARACTER SET 'utf8'");
                  while($datos=mysqli_fetch_row($resultado)){
                    if ($datos[6]>date("Y-m-d")) {
                      $fecha=date("Y-m-d");
                      $mensaje="aún no temina el curso";
                    }else {
                      $mensaje="termino el curso";
                    }
                  echo'
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2><i class="fa fa-graduation-cap"></i>  Materia:'.$datos[3].'</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#'.$datos[0].'g" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
                            </li>
                            <li role="presentation" class=""><a href="#'.$datos[0].'d" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Detalles</a>
                            </li>
                          </ul>
                          <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="'.$datos[0].'g" aria-labelledby="home-tab">
                              <div class="row">
                                Tipo de calificación: '.$datos[4].'
                              </div>
                              <div class="row">
                                fecha inicio: '.$datos[5].'
                              </div>
                              <div class="row">
                                fecha fin: '.$datos[6].'
                              </div>
                              <div class="row">
                                mensaje: '.$mensaje.'
                              </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="'.$datos[0].'d" aria-labelledby="profile-tab">
                              <div class="row">
                                horas para acreditar: '.$datos[7].'
                              </div>
                              <div class="row">
                                lugar donde se imparte: '.$datos[8].'
                              </div>
                              <div class="row">
                                observaciones: '.$datos[10].'
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  ';
                   }
      $conn->close();
  }
  public function obtenerMateriasAlumno($id_alumno)
  {
    include '../../requires/conexion.php';
    $query_alumno="SELECT *  FROM cursos INNER JOIN cedula_tiene_cursos ON cursos.idcurso = cedula_tiene_cursos.cursos_idcurso WHERE cedula_id_cedula = $id_alumno";
    $res_query = $conn->query($query_alumno);
    $conn->query("SET CHARACTER SET 'utf8'");
    while($datos=mysqli_fetch_row($res_query)){
    echo'
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-graduation-cap"></i>  Materia:'.$datos[3].'</h2>
          <ul class="nav navbar-right panel_toolbox">
            <form name="calificar" method="POST" action="../cuestionario/preguntas.php">
               <input type="hidden" id="id_curso" name="id_curso" value="'.$datos[0].'">
               <i class="fa fa-check"><input type="submit" class="fa fa-check" name="responder" id="responder" value="Calificar"  aria-expanded="false"></i>
            </form>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
              <li role="presentation" class="active"><a href="#'.$datos[0].'g" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
              </li>
              <li role="presentation" class=""><a href="#'.$datos[0].'d" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Detalles</a>
              </li>
              <li role="presentation" class=""><a href="#'.$datos[0].'c" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Calificación</a>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="'.$datos[0].'g" aria-labelledby="home-tab">
                <div class="row">
                  Tipo de calificación: '.$datos[4].'
                </div>
                <div class="row">
                  fecha inicio: '.$datos[5].'
                </div>
                <div class="row">
                  fecha fin: '.$datos[6].'
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="'.$datos[0].'d" aria-labelledby="profile-tab">
                <div class="row">
                  horas para acreditar: '.$datos[7].'
                </div>
                <div class="row">
                  lugar donde se imparte: '.$datos[8].'
                </div>
                <div class="row">
                  observaciones: '.$datos[10].'
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="'.$datos[0].'c" aria-labelledby="profile-tab">
                <div class="row">
                  Calificación: '.$datos[16].'
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ';
  }
}

}
 ?>
