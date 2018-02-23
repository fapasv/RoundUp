<?php
  $currentpage = $_SERVER['REQUEST_URI'];
?>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand navbar-right" href="index.php">
        <img src="images/logo.png" alt="home" class="dark-logo">
      </a>
      <?php if(strpos($currentpage,'/login.php') === false) {?>
      <!-- TOOGLE SIDEBAR -->
        <div class="navbar-header">
            <a  id="sidebarCollapse" class="btn btn-info navbar-btn">
                <img src="images/icono_menu.png" />
            </a>
        </div>
        <?php }; ?>
        <!-- NAVEGACIÓN -->
        <div class="collapse navbar-collapse">
          <?php if(strpos($currentpage,'/login.php') === false) {?>
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="#">
              <b>BIENVENIDO</b></br> Juan Pérez</a>
            </li>
            <li class="nav-item">
              <a href="login.php">
                <b>SALIR</b>
                <img src="/images/icono_salir.png">
              </a>
            </li>
          </ul>
        <?php }; ?>
        </div>
    </div>
</nav>
