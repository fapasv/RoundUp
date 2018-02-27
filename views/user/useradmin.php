<!-- DataTables CSS -->
<link rel="stylesheet" href="css/datatables.css">
<!-- DataTable js -->
<script src="js/datatables.js"></script>
<script type="text/javascript">
$(function(){
var oTable = $('#usrtable').DataTable(
  {
    "order": [],
    "columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    }],
    "bLengthChange": false,
    "info":     false
  }
);

$('#txtbuscar').keyup( function () {
  oTable.search(this.value).draw();
  //oTable.fnFilter( this.value );
} );
})
</script>

<div class="container container-full">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="col-xs-4 col-md-3" style="padding:5px">
        <div class="input-group">
          <span class="input-group-addon" id="basic-search"><span class="fa fa-search"></span></span>
          <input type="text" class="form-control" id="txtbuscar" placeholder="Buscar" aria-describedby="basic-search">
        </div>
      </div>
      <div class="col-md-6 hidden-sm hidden-xs" style="padding:5px">
        <ul class="breadcrumb">
          <li><a href="#">Usuario</a></li>
          <li class="active">Gestión de usuarios</li>
        </ul></div>
        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#addusrmodal"><span class="fa fa-plus"></span> Agregar</button>
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
              <a class="like" href="#EditarUsuario" title="Editar" data-toggle="modal" data-target="#editusrmodal">
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
              <a class="like" href="#EditarUsuario" title="Editar" data-toggle="modal" data-target="#editusrmodal">
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
              <a class="like" href="#EditarUsuario" title="Editar" data-toggle="modal" data-target="#editusrmodal">
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
              <a class="like" href="#EditarUsuario" title="Editar" data-toggle="modal" data-target="#editusrmodal">
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
              <a class="like" href="#EditarUsuario" title="Editar" data-toggle="modal" data-target="#editusrmodal">
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

  <!-- Modal Crear Usuario -->
  <div class="modal fade" id="addusrmodal" tabindex="-1" role="dialog" aria-labelledby="addusrmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
      <?php include 'adduser.php'; ?>
      </div>
    </div>
  </div>


  <!-- Modal Modificar Usuario -->
  <div class="modal fade" id="editusrmodal" tabindex="-1" role="dialog" aria-labelledby="editusrmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'edituser.php'; ?>
      </div>
    </div>
  </div>
