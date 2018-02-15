<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Modificar usuario</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form role="form">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <input type="text" id="inputName" class="form-control input-sm" placeholder="Nombre" required autofocus>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputLastName" class="form-control input-sm" placeholder="Apellido" required autofocus>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon" id="btn-fileUp">
            <img src="images/icono_cv_sm.png" />
          </span>
          <label class="btn btn-block btn-sm">
            adjuntar<input type="file" id="inputFile" style="display: none;">
          </label>
        </div>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputSalary" class="form-control input-sm" placeholder="Salario">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <input type="email" class="form-control input-sm" id="inputEmail" placeholder="Correo electrónico">
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputPhone" class="form-control input-sm" placeholder="Teléfono">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <input type="text" id="inputUserName" class="form-control input-sm" placeholder="Nombre de usuario" required autofocus>
      </div>
      <div class="col-sm-6">
        <input type="text" id="inputRole" class="form-control input-sm" placeholder="Rol" required autofocus>
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
