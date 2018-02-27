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
          <li><a href="#">compra</a></li>
          <li class="active">Gestión de compra</li>
        </ul>
      </div>

        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1" style="padding:5px">
          <!-- Button trigger modal -->
          <div class="row">
            <div class="col-md-12">

              <div class="col">
                <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#addpurchasemodal"><span class="fa fa-shopping-cart"></span> Comprar</button>
              </div>

              <div class="col" style="padding-top:10px;">
                <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#deletepurchasemodal"><span class="fa fa-times"></span> Anular</button>
              </div>

            </div>
          </div>

        </div>
      </div>
    </nav>

    <div class="table-responsive" >
      <table id="usrtable" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Proveedor</th>
            <th>Insumo</th>
            <th>Cantidad (Unidad)</th>
            <th>Precio unitario</th>
            <th>Precio total</th>
            <th>Precio total (IVA)</th>
            <th># factura</th>
            <th># compra</th>
            <th class="hidden-sm hidden-xs">Fecha</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pinguinitos</td>
            <td>ARROZ</td>
            <td class="text-right">50</td>
            <td class="text-right">$1.50</td>
            <td class="text-right">$7.50</td>
            <td class="text-right">$8.48</td>
            <td></td>
            <td>5178961</td>
            <td class="hidden-sm hidden-xs">2018-1-15</td>
          </tr>
          <tr>
            <td>El Potosí</td>
            <td>CARNE</td>
            <td class="text-right">5</td>
            <td class="text-right">$3.75</td>
            <td class="text-right">$18.75</td>
            <td class="text-right">$21.19</td>
            <td></td>
            <td>5178962</td>
            <td class="hidden-sm hidden-xs">2018-1-15</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Agregar Compra -->
  <div class="modal fade" id="addpurchasemodal" tabindex="-1" role="dialog" aria-labelledby="addpurchasemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'addpurchase.php'; ?>
      </div>
    </div>
  </div>

  <!-- Modal Anular Compra -->
  <div class="modal fade" id="deletepurchasemodal" tabindex="-1" role="dialog" aria-labelledby="deletepurchasemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'deletepurchase.php'; ?>
      </div>
    </div>
  </div>
