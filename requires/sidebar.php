<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a  href="../../paginas/inicio/home.php"><i class="fa fa-home"></i>Inicio</a></li>
<?php
      if ($_SESSION['rol']==1 ) {
        echo '

        <li>
         <a href="#"><i class="fa fa-flag-checkered"></i>Página 1</a>
        </li>
        ';
      }

      if ($_SESSION['rol']==1) {
        echo '

        <li>
         <a href="#"><i class="fa fa-flag-checkered"></i>Página 2</a>
        </li>
        ';
      }
 ?>
    </ul>
  </div>
</div>
