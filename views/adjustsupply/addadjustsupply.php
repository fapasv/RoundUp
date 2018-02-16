<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Ajuste de insumo</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row" >
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="inputSupply" class="form-control input-sm" style="margin:0px" placeholder="Insumo" />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" >
            <img src="images/icono_buscar_sm.png" />
          </span>
          <input type="text" id="supplyReason" class="form-control input-sm" style="margin:0px" placeholder="Razón" required autofocus/>
        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6">
        <input type="text" id="supplyStock" class="form-control input-sm" placeholder="Stock actual">
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputSupplyMeaseure" class="form-control input-sm" placeholder="Medida">
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6" style="padding:8px 20px">
        <div class="row">
          <div class="col-sm-12 text-center">

            <label style="font-weight:bold; font-size:20px" >-</label>
            <label class="switch switch-md">
              <input type="checkbox">
              <span class="slider slider-md round"></span>
            </label>
            <label style="font-weight:bold; font-size:20px">+</label>
          </div>

        </div>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputSupplyAdjust" class="form-control input-sm" placeholder="Medida a ajustar">
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6">
        <input type="text" id="inputSupplyStockAfter" class="form-control input-sm" placeholder="Stock después del ajuste" required autofocus>
      </div>
      <div class="col-sm-6">

      </div>
    </div>

  </div>
  <div class="modal-footer">
    <div class="text-left">
      <img src="images/required.png" /> campos obligatorios
    </div>
    <button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Ajustar</button>
  </div>
</form>
