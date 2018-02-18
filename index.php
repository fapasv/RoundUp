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
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="css/datatables.css">
  <!-- Switcher CSS -->
  <link rel="stylesheet" href="css/switcher.css">
  <!-- Datetime Picker CSS -->
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="wrapper">
    <!-- Sidebar -->
    <?php require_once 'views/sidebar.php';?>
    <!-- Contenido de pagina -->
    <div id="content">

      <!-- Navegación y Encabezado -->
      <?php require_once 'views/navbar.php';?>
      <!--Contenido-->

      <?php
      if(isset($_GET["view"])){
        switch ($_GET['view']) {
          case 'useradmin':
          include 'views/user/useradmin.php';
          break;

          case 'provideradmin':
          include 'views/provider/provideradmin.php';
          break;

          case 'categoriessupply':
          include 'views/categorysupply/categoriessupply.php';
          break;

          case 'supplyadmin':
          include 'views/supply/supplyadmin.php';
          break;

          case 'adjustsupply':
          include 'views/adjustsupply/adjustsupply.php';
          break;

          case 'purchaseadmin':
          include 'views/purchase/purchaseadmin.php';
          break;

          case 'purchasesummary':
          include 'views/purchasesummary/purchasesummary.php';
          break;

          case 'productcategory':
          include 'views/productcategory/productcategory.php';
          break;

          case 'productadmin':
          include 'views/product/productadmin.php';
          break;

          default:
          include 'views/home.php';
          break;
        }
      }else{
        include 'views/home.php';
      }
      ?>


      <!-- Contenido -->
      <!-- Pie de página y llamadas js -->
      <?php require_once 'views/footer.php';?>
    </body></html>
