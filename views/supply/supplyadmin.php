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
          <li class="active">gestión de insumo</li>
        </ul></div>
        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround btn-block" data-toggle="modal" data-target="#addsupplymodal"><span class="fa fa-plus"></span> Agregar</button>
        </div>
      </div>
    </nav>
    <div class="table-responsive" >
      <table id="usrtable" class="display table dataTable" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Categoría</th>
            <th class="alt-color">Insumo</th>
            <th class="hidden-sm hidden-xs">Cantidad Med.</th>
            <th>Medida</th>
            <th>Merma %</th>
            <th class="alt-color">Stock</th>
            <th>Stock min.</th>
            <th class="no-sort"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td class="alt-color">PISCO</td>
            <td class="hidden-sm hidden-xs">PORRÓN</td>
            <td>ml</td>
            <td>2%</td>
            <td class="alt-color">4000</td>
            <td>2000</td>
            <td>
              <a class="like" href="#EditarInsumo" title="Editar" data-toggle="modal" data-target="#editsupplymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <!-- Modal Modificar Insumo -->
  <div class="modal fade" id="addsupplymodal" tabindex="-1" role="dialog" aria-labelledby="addsupplymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'addsupply.php'; ?>
      </div>
    </div>
  </div>


  <!-- Modal Modificar Insumo -->
  <div class="modal fade" id="editsupplymodal" tabindex="-1" role="dialog" aria-labelledby="editsupplymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'editsupply.php'; ?>
      </div>
    </div>
  </div>
