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
          <li><a href="#">almacen</a></li>
          <li class="active">ajuste de insumo</li>
        </ul>
      </div>
      <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1" style="padding:5px">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#addadjustsupplymodal"><span class="fa fa-plus"></span> Agregar</button>
      </div>
    </div>
  </nav>

  <div class="table-responsive" >
    <table id="usrtable" class="display table dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Insumo</th>
          <th>Razón...</th>
          <th>Stock antes...</th>
          <th class="hidden-sm hidden-xs">Medida</th>
          <th>(+)(-)</th>
          <th class="hidden-xs">Medida a...</th>
          <th>Stock desp...</th>
          <th class="hidden-sm hidden-xs">Responsable</th>
          <th class="hidden-sm hidden-xs">Fecha</th>
          <th class="no-sort"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ARROZ</td>
          <td>HURTO</td>
          <td>50</td>
          <td class="hidden-sm hidden-xs">lb</td>
          <td>-</td>
          <td class="hidden-xs">20</td>
          <td>30</td>
          <td class="hidden-sm hidden-xs">jagtulat</td>
          <td class="hidden-sm hidden-xs">2018-1-15</td>
          <td>
            <a class="like" href="javascript:void(0)" title="Borrar">
              <img src="images/icono_borrar_sm.png" />
            </a>
          </td>
        </tr>
        <tr>
          <td>ALITAS</td>
          <td>PODRIDO</td>
          <td>5</td>
          <td class="hidden-sm hidden-xs">CANTIDAD</td>
          <td>-</td>
          <td class="hidden-xs">3</td>
          <td>2</td>
          <td class="hidden-sm hidden-xs">rortega</td>
          <td class="hidden-sm hidden-xs">2018-1-15</td>
          <td>
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
<div class="modal fade" id="addadjustsupplymodal" tabindex="-1" role="dialog" aria-labelledby="addadjustsupplymodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <?php include 'addadjustsupply.php'; ?>
    </div>
  </div>
</div>
