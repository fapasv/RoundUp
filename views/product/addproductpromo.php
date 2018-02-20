<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Agregar promoción</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<form role="form">
<div class="modal-body">
  <div class="row">
    <div class="col-sm-6">
      <input type="text" id="inputNombrePromo" class="form-control input-sm" placeholder="Nombre de promoción"/>
    </div>
    <div class="col-sm-6">
      <div class="input-group">
        <span class="input-group-addon" >
          <img src="images/icono_buscar_sm.png" />
        </span>
        <input type="text" id="inputProducto" class="form-control input-sm" style="margin:0px" placeholder="Seleccionar producto" />
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">Vigencia:
      <div class="row">
        <div class="col-xs-6 col-sm-6">
          <div class="form-group">
            <div class='input-group date datetimeField' id='datetimepicker1' >
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
              <input type='text' class="form-control" placeholder="Fecha desde"/>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6">
          <div class="form-group">
            <div class='input-group date datetimeField' id='datetimepicker1' >
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
              <input type='text' class="form-control" placeholder="Fecha hasta"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">Días de la semana:
      <div class="row">
        <div class="col-sm-12 weekDays-selector text-center">
          <input type="checkbox" id="weekday-mon" class="weekday" />
          <label for="weekday-mon">Lun</label>
          <input type="checkbox" id="weekday-tue" class="weekday" />
          <label for="weekday-tue">Mar</label>
          <input type="checkbox" id="weekday-wed" class="weekday" />
          <label for="weekday-wed">Mie</label>
          <input type="checkbox" id="weekday-thu" class="weekday" />
          <label for="weekday-thu">Jue</label>
          <input type="checkbox" id="weekday-fri" class="weekday" />
          <label for="weekday-fri">Vie</label>
          <input type="checkbox" id="weekday-sat" class="weekday" />
          <label for="weekday-sat">Sab</label>
          <input type="checkbox" id="weekday-sun" class="weekday" />
          <label for="weekday-sun">Dom</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row" >
    <div class="col-sm-12">
      Hora:
      <div class="row">
        <div class="col-xs-6 col-sm-6">
          <div class="form-group">
            <div class='input-group date timeField' id='datetimepicker3'>
              <span class="input-group-addon">
                <span class="fa fa-clock"></span>
              </span>
              <input type='text' class="form-control" placeholder="Hora desde" />
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6">
          <div class="form-group">
            <div class='input-group date timeField' id='datetimepicker4'>
              <span class="input-group-addon">
                <span class="fa fa-clock"></span>
              </span>
              <input type='text' class="form-control" placeholder="Hora hasta" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" >
      <div class="col-sm-6">
        Descuento o gratis:
        <div class="row">
          <div class="col-xs-8 col-sm-8">
            <select class="form-control">
              <option>Descuento</option>
              <option>Gratis</option>
            </select>
          </div>
          <div class="col-xs-4 col-sm-4"><input type='text' class="form-control" placeholder="%" /></div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          # de platos para aplicar promoción:
          <div class="row">
            <div class="col-sm-12">
          <input type='text' class="form-control"  id="NPlatos" placeholder="# de platos"/>
          </div></div>
        </div>
        </div>

    </div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Crear promoción</button>
</div>
</form>
