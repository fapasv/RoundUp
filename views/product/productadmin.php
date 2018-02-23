<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="row">
        <div style="padding:5px">
          <ul class="breadcrumb">
            <li><a href="#">Producto</a></li>
            <li class="active">Gestión de producto</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="row text-center">
            <div class="col-xs-4" style="padding:5px">
              <div class="input-group">
                <span class="input-group-addon" id="basic-search"><span class="fa fa-search"></span></span>
                <input type="text" class="form-control" id="txtbuscar" placeholder="Buscar" aria-describedby="basic-search">
              </div>
            </div>
            <div class="col-xs-4 text-right cont-expand" style="padding:5px">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger btn-block btn-noround"
              data-toggle="modal" data-target="#addproduct"><span class="fa fa-plus"></span> Crear producto</button>
            </div>
            <div class="col-xs-4 text-right cont-expand" style="padding:5px">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger btn-block btn-noround" data-toggle="modal" data-target="#addproductpromo"><span class="fa fa-plus"></span> Crear promoción</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="row" style="margin-top:30px">

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct1.php"; ?>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct1.php"; ?>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct1.php"; ?>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct2.php"; ?>
    </div>
    
<div class="clearfix visible-lg-block"></div>

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct2.php"; ?>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php require "thumbproduct2.php"; ?>
    </div>

  </div>

</div>


<!-- Modal Agregar Promoción -->
<div class="modal fade" id="addproductpromo" tabindex="-1" role="dialog" aria-labelledby="addproductpromo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <?php include 'addproductpromo.php'; ?>
    </div>
  </div>
</div>


<!-- Modal Agregar Producto -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproduct" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <?php include 'addproduct.php'; ?>
    </div>
  </div>
</div>

<!-- Modal Modificar Producto -->
<div class="modal fade" id="editproductmodal" tabindex="-1" role="dialog" aria-labelledby="editproductmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <?php include 'editproduct.php'; ?>
    </div>
  </div>
</div>
