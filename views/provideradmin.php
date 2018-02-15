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
          <li class="active">Gestión de proveedores</li>
        </ul></div>
        <div class="col-md-4 text-right cont-expand" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround" data-toggle="modal" data-target="#addprovidermodal"><span class="fa fa-plus"></span> Agregar</button>
        </div>
      </div>
    </nav>
    <div class="table-responsive" >
      <table id="usrtable" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Proveedor</th>
            <th>NIT</th>
            <th>Página web</th>
            <th class="hidden-sm hidden-xs">Dirección</th>
            <th class="hidden-sm hidden-xs">Fecha</th>
            <th class="no-sort"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>Pinguinitos</td>
            <td>41516161-11-0</td>
            <td>https://pinguinitos.com</td>
            <td class="hidden-sm hidden-xs">San Marcos</td>
            <td class="hidden-sm hidden-xs">2017-10-20</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_proveedor_sm.png" />
              </a>
              <a class="like" href="#EditarProveedor" title="Editar" data-toggle="modal" data-target="#editprovidermodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>El Potosí</td>
            <td>41516161-11-0</td>
            <td>https://distribuidoraelpotosi.com</td>
            <td class="hidden-sm hidden-xs">Mejicanos</td>
            <td class="hidden-sm hidden-xs">2011-07-25</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_proveedor_sm.png" />
              </a>
              <a class="like" href="#EditarProveedor" title="Editar" data-toggle="modal" data-target="#editprovidermodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>Bimbo</td>
            <td>41516161-11-0</td>
            <td>https://bimbo.com</td>
            <td class="hidden-sm hidden-xs">Santa Tecla</td>
            <td class="hidden-sm hidden-xs">2009-01-12</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_proveedor_sm.png" />
              </a>
              <a class="like" href="#EditarProveedor" title="Editar" data-toggle="modal" data-target="#editprovidermodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>Clean Air</td>
            <td>41516161-11-0</td>
            <td>https://clenairsv.com</td>
            <td class="hidden-sm hidden-xs">San Salvador</td>
            <td class="hidden-sm hidden-xs">2012-03-29</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="javascript:void(0)" title="CV">
                <img src="images/icono_proveedor_sm.png" />
              </a>
              <a class="like" href="#EditarProveedor" title="Editar" data-toggle="modal" data-target="#editprovidermodal">
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

  <!-- Modal Crear Proveedor -->
  <div class="modal fade" id="addprovidermodal" tabindex="-1" role="dialog" aria-labelledby="addprovidermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agregar proveedor</h5>
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
            <div class="row added-section">
              <div class="col-sm-1">
                <button type="submit" class="btn btn-danger btn-noround btn-sm" style="margin:5px"><span class="fa fa-plus"></span></button>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control input-sm" id="inputContact" placeholder="Nombre de contacto" required autofocus />
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-6">
                <input type="email" class="form-control input-sm" id="inputEmail" placeholder="Correo electrónico">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control input-sm" id="inputPhone" placeholder="Teléfono">
              </div>
              <div class="col-sm-1">
                <a class="like" href="javascript:void(0)" title="Borrar" style="padding:5px">
                  <img src="images/icono_borrar_alt_md.png" />
                </a>
              </div>
            </div>
            <div class="row added-section">
              <div class="col-sm-1">
                <button type="submit" class="btn btn-danger btn-noround btn-sm" style="margin:5px"><span class="fa fa-plus"></span></button>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control input-sm" id="inputContact" placeholder="Nombre de contacto" required autofocus />
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-6">
                <input type="email" class="form-control input-sm" id="inputEmail" placeholder="Correo electrónico">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control input-sm" id="inputPhone" placeholder="Teléfono">
              </div>
              <div class="col-sm-1">
                <a class="like" href="javascript:void(0)" title="Borrar" style="padding:5px">
                  <img src="images/icono_borrar_alt_md.png" />
                </a>
              </div>
            </div>
            <div class="row added-section">
              <div class="col-sm-1">
                <button type="submit" class="btn btn-danger btn-noround btn-sm" style="margin:5px"><span class="fa fa-plus"></span></button>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control input-sm" id="inputContact" placeholder="Nombre de contacto" required autofocus />
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-6">
                <input type="email" class="form-control input-sm" id="inputEmail" placeholder="Correo electrónico">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control input-sm" id="inputPhone" placeholder="Teléfono">
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
      </div>
    </div>
  </div>


  <!-- Modal Modificar Proveedor -->
  <div class="modal fade" id="editprovidermodal" tabindex="-1" role="dialog" aria-labelledby="editprovidermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
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
      </div>
    </div>
  </div>
