<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Modificar proveedor</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <input type="text" id="inputProvider" class="form-control input-sm" placeholder="Proveedor" required autofocus/>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputNit" class="form-control input-sm" placeholder="NIT"/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <input type="text" id="inputUrl" class="form-control input-sm" placeholder="Página web"/>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputAddrs" class="form-control input-sm" placeholder="Dirección"/>
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
