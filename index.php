<!DOCTYPE html>
<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Round Up</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <!-- Scrollbar Personalizado CSS -->
  <link rel="stylesheet" href="css/jquery.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="wrapper">
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php';?>
    <!-- Contenido de pagina -->
    <div id="content">

      <!-- Navegación y Encabezado -->
      <?php include 'includes/navbar.php';?>
      <!--Contenido-->
      <div class="container">

  <?php
    $currentpage = $_SERVER['REQUEST_URI'];
    if($currentpage == "/index.php" || $currentpage == "/") {
      include 'includes/home.php';
    }
  ?>

      </div>
      <!-- Contenido -->
      <!-- Pie de página y llamadas js -->
      <?php include 'includes/footer.php';?>
    </body></html>
