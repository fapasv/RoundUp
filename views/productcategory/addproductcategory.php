<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Agregar categoría de producto</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <input type="text" id="inputCategory" class="form-control input-sm" placeholder="Nombre de categoría" required autofocus>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="inputBuscar" class="form-control input-sm" style="margin:0px" placeholder="Área" required autofocus/>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-footer">
    <div class="text-left">
      <img src="images/required.png" /> campos obligatorios
    </div>
    <button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Crear</button>
  </div>
</form>
