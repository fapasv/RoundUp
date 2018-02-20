<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="col-md-4">
      </div>
      <div class="col-md-4" style="padding:5px">
        <ul class="breadcrumb">
          <li><a href="#">Venta</a></li>
          <li class="active">Caja</li>
        </ul>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </nav>
  <div class="container-fluid" style="margin:30px 0px">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default" style="border-radius:20px">
          <div class="panel-body" style="padding:20px;">

            <div class="row" style="padding:30px 0px">

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-1.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-2.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-3.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-4.png" width="100px"/>
                </a>
              </div>
                </div>
                <div class="row">
              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-5.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-6.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-7.png" width="100px"/>
                </a>
              </div>

              <div class="col-xs-6 col-md-3">
                <a class="lnk-lg btn btn-lg btn-block" href="#">
                  <img src="images/cc-8.png" width="100px"/>
                </a>
              </div>

            </div>
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <button type="button" class="btn btn-danger btn-noround btn-block" style="margin:2px">Anular</button>
              </div>
              <div class="col-xs-6 col-md-3">
                <button type="button" class="btn btn-danger btn-noround btn-block" style="margin:2px">Pagar</button>
              </div>
              <div class="col-xs-6 col-md-3">
                <button type="button" class="btn btn-danger btn-noround btn-block" style="margin:2px">Descuento</button>
              </div>
              <div class="col-xs-6 col-md-3">
                <button type="button" class="btn btn-danger btn-noround btn-block" style="margin:2px">Agregar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Crear categoría -->
  <div class="modal fade" id="addproductcategory" tabindex="-1" role="dialog" aria-labelledby="addproductcategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'addproductcategory.php'; ?>
      </div>
    </div>
  </div>


  <!-- Modal Modificar Usuario -->
  <div class="modal fade" id="editproductcategorymodal" tabindex="-1" role="dialog" aria-labelledby="editproductcategorymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'editproductcategory.php'; ?>
      </div>
    </div>
  </div>
