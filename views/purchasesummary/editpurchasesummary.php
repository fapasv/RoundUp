<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Modificar resumen de compra</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <input type="text" id="inputProvider" class="form-control input-sm" placeholder="Proveedor" required autofocus>
      </div>
      <div class="col-xs-1 col-sm-6"></div>
    </div>
    <div class="row" >
      <div class="col-xs-6 col-sm-6">
        <input type="text" id="inputNFactura" class="form-control input-sm" placeholder="# de factura">
      </div>
      <div class="col-xs-6 col-sm-6">
        <input type="text" id="inputNCompra" class="form-control input-sm" placeholder="# de compra">
      </div>
    </div>
    <div class="row" >
      <div class="col-xs-6 col-sm-6">
        <input type="text" id="inputMontoTotal" class="form-control input-sm" placeholder="Monto total">
      </div>
      <div class="col-xs-6 col-sm-6">
        <input type="text" id="inputMontoTotalIVA" class="form-control input-sm" placeholder="Monto total + IVA">
      </div>
    </div>
    <div class="row" style="margin-top:10px">
      <div class="col-xs-6 col-sm-6">
          <button type="button" class="btn btn-danger btn-block btn-noround"><span class="fa fa-plus"></span> Adjuntar factura</button>
      </div>
      <div class="col-xs-6 col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="inputEstado" class="form-control input-sm" style="margin:0px" placeholder="Estado" required autofocus/>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <div class="text-left">
    <img src="images/required.png" /> campos obligatorios
  </div>
    <button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Pagado</button>
  </div>
</form>
