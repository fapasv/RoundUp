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

  <!-- Switcher CSS -->
  <link rel="stylesheet" href="css/switcher.css">
  <!-- Datetime Picker CSS -->
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="css/style.css">


  <!-- jQuery CDN -->
  <script src="js/jquery-1.js"></script>
  <!-- Moments Js -->
  <script type="text/javascript" src="js/moment.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="js/bootstrap.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="js/jquery.js"></script>
  <!-- DateTime Picker JS -->
  <script src="js/bootstrap-datetimepicker.js"></script>


  <script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
      $('#sidebar').removeClass('active');
      $('.overlay').fadeOut();
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').addClass('active');
      $('.overlay').fadeIn();
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $('.datetimeField').datetimepicker({format: 'DD/MM/YYYY'});
    $('.timeField').datetimepicker({format: 'LT'});
  });
  </script>


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

          case 'salesorder':
          include 'views/sales/salesorder.php';
          break;

          case 'salesordersummary':
          include 'views/sales/salesordersummary.php';
          break;

          case 'salesseparatedorder':
          include 'views/sales/salesseparatedorder.php';
          break;

          case 'salesbox':
          include 'views/sales/salesbox.php';
          break;

          case 'salesboxcard':
          include 'views/sales/salesboxcard.php';
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
