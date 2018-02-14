<div class="container-full">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="col-md-4" style="padding:5px">
        <div class="input-group">
          <span class="input-group-addon" id="basic-search"><span class="fa fa-search"></span></span>
          <input type="text" class="form-control" id="txtbuscar" placeholder="Buscar" aria-describedby="basic-search">
        </div>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs" style="padding:5px">
        <ul class="breadcrumb">
          <li><a href="#">Usuario</a></li>
          <li class="active">Gestión de usuarios</li>
        </ul></div>
        <div class="col-md-4 text-right cont-expand" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround" data-toggle="modal" data-target="#addusrmodal"><span class="fa fa-plus"></span> Agregar</button>
        </div>
      </div>
    </nav>
    <div class="table-responsive" >
      <table id="usrtable" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Cuenta</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th class="hidden-sm hidden-xs">Sueldo</th>
            <th>Correo</th>
            <th class="hidden-xs">Rol</th>
            <th class="hidden-sm hidden-xs">Fecha</th>
            <th class="no-sort"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>jaguilar</td>
            <td>Juan Aguilar</td>
            <td>7777-7777</td>
            <td class="hidden-sm hidden-xs">$250.00</td>
            <td>jaguilar@gmail.com</td>
            <td class="hidden-xs">Administrador</td>
            <td class="hidden-sm hidden-xs">2017-10-20</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_cv_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Editar">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>Winters</td>
            <td>Garrett Winters</td>
            <td>7777-6666</td>
            <td class="hidden-sm hidden-xs">$170</td>
            <td>Winters@gmail.com</td>
            <td class="hidden-xs">Contador</td>
            <td class="hidden-sm hidden-xs">2011-07-25</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_cv_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Editar">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>Acox</td>
            <td>Ashton Cox</td>
            <td>7777-5555</td>
            <td class="hidden-sm hidden-xs">$86</td>
            <td>Acox@gmail.com</td>
            <td class="hidden-xs">Técnico</td>
            <td class="hidden-sm hidden-xs">2009-01-12</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_cv_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Editar">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>KellyG</td>
            <td>Cedric Kelly</td>
            <td>7777-5544</td>
            <td class="hidden-sm hidden-xs">$1,433</td>
            <td>kellyg@gmail.com</td>
            <td class="hidden-xs">Senior Javascript Developer</td>
            <td class="hidden-sm hidden-xs">2012-03-29</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_cv_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Editar">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>Herochand</td>
            <td>Herrod Chandler</td>
            <td>7777-4444</td>
            <td class="hidden-sm hidden-xs">$1,137</td>
            <td>herochand@gmail.com</td>
            <td class="hidden-xs">Especialista en Integración</td>
            <td class="hidden-sm hidden-xs">2012-08-06</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_cv_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Editar">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="addusrmodal" tabindex="-1" role="dialog" aria-labelledby="addusrmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agregar nuevo usuario</h5>
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
            <div class="row" >
              <div class="col-sm-6">
                <input type="email" class="form-control input-sm" id="inputEmail" placeholder="Correo electrónico">
              </div>
              <div class="col-sm-6">
                <input type="text" id="inputPhone" class="form-control input-sm" placeholder="Teléfono">
              </div>
            </div>
            <div class="row" style="margin-top:10px">
              <div class="col-sm-6">
                <input type="text" id="inputUserName" class="form-control input-sm" placeholder="Nombre de usuario" required autofocus>
              </div>
              <div class="col-sm-6">
                <input type="text" id="inputRole" class="form-control input-sm" placeholder="Rol" required autofocus>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <input type="password" id="inputPswd" class="form-control input-sm" placeholder="Contraseña" required autofocus>
              </div>
              <div class="col-sm-6">
                <input type="password" id="inputPswdConfirm" class="form-control input-sm" placeholder="Confirmar contraseña" required autofocus>
              </div>
            </div>            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-noround"><span class="fa fa-plus"></span> Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
