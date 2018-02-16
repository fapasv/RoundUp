<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Agregar insumo</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="thumbnail">
      <img src="images/carne.png" alt="carne">
      <div class="caption text-center">
      <a href="#" class="btn btn-danger btn-noround" role="button"><span class="fa fa-plus"></span> Imagen</a>
      </div>
    </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col col-sm-12">
            <div class="input-group">
              <span class="input-group-addon" >
                <img src="images/icono_buscar_sm.png" />
              </span>
              <input type="text" id="supplyCategory" class="form-control input-sm" style="margin:0px" placeholder="Categoría" required autofocus/>
            </div>
          </div>
          <div class="col col-sm-12">
            <input type="text" id="supplyName" class="form-control input-sm" placeholder="Nombre de insumo"/>
          </div>
        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="supplyUnity" class="form-control input-sm" style="margin:0px" placeholder="Unidad" required autofocus/>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="supplyMeasure" class="form-control input-sm" style="margin:0px" placeholder="Medida" />
        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6">
        <input type="text" class="form-control input-sm" id="supplyqty" placeholder="Cantidad por medida"/>
      </div>
      <div class="col-sm-6">
        <input type="text" id="supplymrm" class="form-control input-sm" placeholder="Mermas %">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <input type="text" id="supplyminstock" class="form-control input-sm" placeholder="Stock min."/>
      </div>
      <div class="col-sm-6">
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
