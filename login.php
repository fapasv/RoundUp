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
  <!-- Signing CSS-->
  <link href="css/signin.css" rel="stylesheet">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form>
  <div class="wrapper">
    <div id="content">
      <!-- Navegación y Encabezado -->
      <?php include 'includes/navbar.php';?>
<!--Contenido-->
      <div class="container">

          <div class="form-signin">
            <div class="row">
              <div class="text-center">
                <img alt=" " src="images/slice_0_3.png" style="border-width: 0px;">
              </div>
            </div>

            <div class="row roundedform">
              <div class="text-center mb-4">
                <img alt=" " src="images/slice_1_3.png" style="border-width: 0px;">
              </div>

              <div class="form-label-group" style="padding-top:20px">
                <label for="inputUserName" class="sr-only">Usuario</label>
                <input type="text" id="inputUserName" class="form-control" placeholder="Usuario" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
              </div>
        <div class="form-label-group" style="padding-top:20px">
              <button class="btn btn-lg btn-danger btn-block" type="submit">INGRESAR</button>
        </div>
              <div class="form-label-group" style="padding-top:20px">
                <div class="text-center mb-4">
                  <a href="#">
                    ¿Olvidó su contraseña?
                  </a>
                </div>
              </div>
            </div>
            <!--/.roundedform-->
          </div>
            <!--/.form-signin-->

      </div>
      <!-- Contenido -->
      <!-- Pie de página y llamadas js -->
      <?php include 'includes/footer.php';?>
    </form>
    </body></html>
