<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Agregar producto</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/carne.png" alt="carne">
          <div class="caption text-center">
            <a href="#" class="btn btn-danger btn-noround" role="button"><span class="fa fa-plus"></span> Imagen</a>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <input type="text" id="inputProducto" class="form-control input-sm" placeholder="Nombre de producto" required autofocus/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="input-group">
              <span class="input-group-addon" >
                <img src="images/icono_buscar_sm.png" />
              </span>
              <input type="text" id="supplyCategory" class="form-control input-sm" style="margin:0px" placeholder="Categoría" required autofocus/>
            </div>
          </div>
          <div class="col-sm-6">
            <input type="text" id="inputPrecio" class="form-control input-sm" placeholder="Precio de venta" required autofocus/>
          </div>
        </div>
      </div>
    </div>

    <div class="row added-section">
      <div class="col-sm-1">
        <button type="submit" class="btn btn-danger btn-noround btn-sm" ><span class="fa fa-plus"></span></button>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="inputInsumo" class="form-control input-sm" style="margin:0px" placeholder="Insumo" />
        </div>
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" class="form-control input-sm" style="margin:0px" placeholder="Primario" />
        </div>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control input-sm"  placeholder="Medida utilizada">
      </div>
      <div class="col-sm-1">
        <a class="like" href="javascript:void(0)" title="Borrar" style="padding:5px">
          <img src="images/icono_borrar_alt_md.png" />
        </a>
      </div>
    </div>

    <div class="row added-section">
      <div class="col-sm-1">
        <button type="submit" class="btn btn-danger btn-noround btn-sm" ><span class="fa fa-plus"></span></button>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="inputInsumo" class="form-control input-sm" style="margin:0px" placeholder="Insumo" />
        </div>
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" class="form-control input-sm" style="margin:0px" placeholder="Primario" />
        </div>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control input-sm"  placeholder="Medida utilizada">
      </div>
      <div class="col-sm-1">
        <a class="like" href="javascript:void(0)" title="Borrar" style="padding:5px">
          <img src="images/icono_borrar_alt_md.png" />
        </a>
      </div>
    </div>

  </div>
  <div class="modal-footer">
    <div class="text-left">
      <img src="images/required.png" /> campos obligatorios
    </div>
    <button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Agregar</button>
  </div>
</form>
