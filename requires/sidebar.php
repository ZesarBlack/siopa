<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a  href="../../paginas/inicio/home.php"><i class="fa fa-home"></i>Inicio</a></li>
<?php


      if ($_SESSION['rol']==1 ) {
        echo '
        <li>
        <a href="../../paginas/ingresos/ingresos.php"><i class="fa fa-plus"></i>Ingreso</a>
        </li>
        ';
      }


      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/capacitacion_continua/capacitacion.php"><i class="fa fa-cogs"></i>Capacitación Continua</a>
        </li>
        ';
      }
      /*
      <li><a href="../../paginas/formacionContinua/cursos.php">Cursos</a></li>
      <li><a href="../../paginas/asignar_curso_policia/asignar_curso_policia.php">Asignar Cursos Policías</a></li>
      <li><a href="../../paginas/calificar_policias/asignar_calf.php">Calificar Policías</a></li>
      <li><a href="../../paginas/historial_policia/historial_policia.php">Historial de Calificaciones Policías</a></li>
      */


      if ($_SESSION['rol']==1) {
        echo '
            <li><a><i class="fa fa-flag"></i>Permanencia<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="../../paginas/Sol_Control_Conf/solconfi.php">Evaluación Control de Confianza</a></li>
                <li><a href="../../paginas/competencias_basicas/competencias.php">Evaluación de Competencias Básicas de la Funcion Policial</a></li>
                <li><a href="../../paginas/evaluacion_desempeno/desempeno.php">Evaluación de Desempeño</a></li>
              </ul>
            </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/certificado_u_policial/certificado_policial.php"><i class="fa fa-graduation-cap"></i>Certificado único Policial</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/promocion_grado/promocion_grado.php"><i class="fa fa-line-chart"></i>Promoción de Grado</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/estimulos/estimulos.php"><i class="fa fa-star"></i>Estimulos</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/licencias_y_comisiones/licensias_comisiones.php"><i class="fa fa-list-ul"></i>Licencias y Comisiones</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/procedimiento_administrativo/procedimiento_administrativo.php"><i class="fa fa-exclamation-triangle"></i>Procedimientos Administrativos</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/regimen_diciplinario/regimen_diciplinario.php"><i class="fa fa-legal"></i>Régimen Diciplinario</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/conclusion_servicio/conclusion_servicio.php"><i class="fa fa-flag-checkered"></i>Conclusión de servicio</a>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li>
         <a href="../../paginas/expediente_individual/expediente_individual.php"><i class="fa fa-flag-checkered"></i>Expediente Individual</a>
        </li>
        ';
      }
      /*
       if ($_SESSION['rol']==1) {
         echo '
         <li><a><i class="fa fa-book"></i>Control Apirantes y policias<span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
             <li><a href="../../paginas/subir/index.php">Documentación</a></li>
             <li><a href="../../paginas/ver_documentos/documentos.php">Ver documentos</a></li>
           </ul>
         </li>
         ';
       }
       */
       if ($_SESSION['rol']==1) {
         echo '
         <li><a><i class="fa fa-book"></i>Expediente Individual de la Carrera Policial<span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
             <li><a href="../../paginas/documentacion_policia/index.php">Agregar Documentos</a></li>
             <li><a href="../../paginas/seguimiento_elemento/seguimiento.php">Documentación del Policia</a></li>
           </ul>
         </li>
         ';
       }
 ?>
    </ul>
  </div>
</div>
