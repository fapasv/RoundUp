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
          <li class="active">Gestión de proveedores</li>
        </ul></div>
        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#addprovidermodal"><span class="fa fa-plus"></span> Agregar</button>
        </div>
      </div>
    </nav>

    <div class="table-responsive" >
      <table id="usrtable" class="display table dataTable" cellspacing="0" width="100%">
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
              <a class="like" href="#ContactosProveedor" title="Contactos" data-toggle="modal" data-target="#contactsprovidermodal">
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
              <a class="like" href="#ContactosProveedor" title="Contactos" data-toggle="modal" data-target="#contactsprovidermodal">
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
              <a class="like" href="#ContactosProveedor" title="Contactos" data-toggle="modal" data-target="#contactsprovidermodal">
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
              <a class="like" href="#ContactosProveedor" title="Contactos" data-toggle="modal" data-target="#contactsprovidermodal">
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
      <?php include 'addprovider.php'; ?>
      </div>
    </div>
  </div>

  <!-- Modal Modificar Proveedor -->
  <div class="modal fade" id="editprovidermodal" tabindex="-1" role="dialog" aria-labelledby="editprovidermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
          <?php include 'editprovider.php'; ?>
      </div>
    </div>
  </div>

  <!-- Modal Modificar Proveedor -->
  <div class="modal fade" id="contactsprovidermodal" tabindex="-1" role="dialog" aria-labelledby="contactsprovidermodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content">
          <?php include 'contactsprovider.php'; ?>
      </div>
    </div>
  </div>
