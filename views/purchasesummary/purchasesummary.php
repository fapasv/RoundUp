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
      <div class="col-xs-6" style="padding:5px">
        <ul class="breadcrumb">
          <li><a href="#">compra</a></li>
          <li class="active">Resumen de compra</li>
        </ul></div>
        <div class="col-xs-4 col-md-3"></div>
      </div>
  </nav>

  <div class="table table-responsive" >
    <table id="usrtable" class="display table dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Proveedor</th>
          <th># factura</th>
          <th># compra</th>
          <th>Monto total</th>
          <th>Monto total con IVA</th>
          <th>Estado</th>
          <th>Fecha compra/anulado</th>
          <th>Fecha pagado</th>
          <th class="no-sort"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Pinguinitos</td>
          <td class="text-right"></td>
          <td class="text-right">5178961</td>
          <td class="text-right">$80.00</td>
          <td class="text-right"></td>
          <td class="text-center warning">pendiente</td>
          <td>2017-11-23</td>
          <td></td>
          <td>
            <a class="like" href="#" title="Resumen">
              <img src="images/icono_factura_sm.png" />
            </a>
            <a class="like" href="#EditarCompra" title="Editar" data-toggle="modal" data-target="#editsummarypurchase">
              <img src="images/icono_editar_sm.png" />
            </a>

          </td>
        </tr>
        <tr>
          <td>Pinguinitos</td>
          <td class="text-right">515145</td>
          <td class="text-right">5178965</td>
          <td class="text-right">$76.00</td>
          <td class="text-right">$85.88</td>
          <td class="text-center success">pagado</td>
          <td>2017-11-28</td>
          <td>2017-12-05</td>
          <td></td>
        </tr>
        <tr>
          <td>Pinguinitos</td>
          <td class="text-right"></td>
          <td class="text-right">5178968</td>
          <td class="text-right">$50.00</td>
          <td class="text-right"></td>
          <td class="text-center danger">anulado</td>
          <td>2017-11-15</td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Agregar Compra -->
<div class="modal fade" id="editsummarypurchase" tabindex="-1" role="dialog" aria-labelledby="editsummarypurchase" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <?php include 'editpurchasesummary.php'; ?>
    </div>
  </div>
</div>
