<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="col-xs-6 col-md-4" style="padding:5px">
        <div class="input-group">
          <span class="input-group-addon" id="basic-search"><span class="fa fa-search"></span></span>
          <input type="text" class="form-control" id="txtbuscar" placeholder="Buscar" aria-describedby="basic-search">
        </div>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs" style="padding:5px">
        <ul class="breadcrumb">
          <li><a href="#">Producto</a></li>
          <li class="active">Categoría de producto</li>
        </ul>
      </div>
        <div class="col-xs-6 col-md-4 text-right cont-expand" style="padding:5px">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-noround" data-toggle="modal" data-target="#addproductcategory"><span class="fa fa-plus"></span> Agregar</button>
        </div>
      </div>
    </nav>
    <div class="table-responsive">
      <table id="usrtable" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th style="width:80%;">Categorías</th>
            <th style="width:10%;">Área</th>
            <th class="no-sort"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>VERDURAS</td>
            <td>COCINA</td>
            <td style="white-space:nowrap;">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="#EditarCategoria" title="Editar" data-toggle="modal" data-target="#editproductcategorymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>CARNES</td>
            <td>COCINA</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="#EditarCategoria" title="Editar" data-toggle="modal" data-target="#editproductcategorymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>LICOR</td>
            <td>BAR</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="#EditarCategoria" title="Editar" data-toggle="modal" data-target="#editproductcategorymodal">
                <img src="images/icono_editar_sm.png" />
              </a>
              <a class="like" href="javascript:void(0)" title="Borrar">
                <img src="images/icono_borrar_sm.png" />
              </a>
            </td>
          </tr>
          <tr>
            <td>PANES</td>
            <td>COCINA</td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
              <a class="like" href="#EditarCategoria" title="Editar" data-toggle="modal" data-target="#editproductcategorymodal">
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

  <!-- Modal Crear categoría -->
  <div class="modal fade" id="addproductcategory" tabindex="-1" role="dialog" aria-labelledby="addproductcategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'addproductcategory.php'; ?>
      </div>
    </div>
  </div>


  <!-- Modal Modificar Usuario -->
  <div class="modal fade" id="editproductcategorymodal" tabindex="-1" role="dialog" aria-labelledby="editproductcategorymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <?php include 'editproductcategory.php'; ?>
      </div>
    </div>
  </div>
