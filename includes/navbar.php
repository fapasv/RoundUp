<?php
  $currentpage = $_SERVER['REQUEST_URI'];
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
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
            <li >
              <a href="#">
              <b>BIENVENIDO</b></br> Juan Pérez</a>
            </li>
            <li class="nav-item">
              <a class="signout" href="login.php">
                   Salir
              </a>
            </li>
          </ul>
        <?php }; ?>
          <!-- LOGO -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="logo" href="#">
                  <img src="images/logo.png" alt="home" class="dark-logo">
                </a>
              </li>
            </ul>
        </div>
    </div>
</nav>
