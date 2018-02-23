<div class="container container-full" >

  <div  class="container-fluid">
    <div class="row">
      <div class="col col-md-4">
        <?php require_once "orderform.php"; ?>
      </div>
      <div class="col col-md-8">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-search"><span class="fa fa-search"></span></span>
              <input type="text" class="form-control" id="txtbuscar" placeholder="Buscar" aria-describedby="basic-search">
            </div>
          </div>
          <div class="col-xs-8 col-md-8 text-right">

            <a class="btn btn-default btn-sm" style="padding:5px" href="index.php?view=salesorder">
              <img src="images/icono_cerrar_solo.png" alt="cerrar" title="cerrar" />
            </a>
          </div>

        </div>
        <?php require_once "productthumblist.php"; ?>
      </div>
    </div>

  </div>
