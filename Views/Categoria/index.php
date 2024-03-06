<?php
headerAdmin($data);
?>

<body>
  <div class="mobile-menu-overlay"></div>

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="card-box mb-30">
          <div class="pb-20 ">
            <div class="container p-2">
              <button id="btn-modal" class="btn btn-dark">Ingresar
                Nuevo producto</button>
            </div>
          </div>
        </div>
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
          <div class="pb-20 ">
            <table class="data-table table stripe hover nowrap">
              <thead>
                <tr>
                  <th class="table-plus datatable-nosort">#</th>

                  <th>Descripción</th>

                  <th class="datatable-nosort">Action</th>
                </tr>
              </thead>
              <tbody class="DatosTable">
              </tbody>
            </table>
          </div>

          <!-- Simple Datatable End -->

        </div>

      </div>
    </div>
    <!-- welcome modal start -->

    <!-- Modal save productos -->
    <div class="modal fade" id="Modal_productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title titulo" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-productos-Save">

              <input type="hidden" class=" form-control codigo" id="codigo" name="codigo" aria-describedby="emailHelp"
                placeholder="ingrese codigo">

              <div class="form-group">
                <label for="descripcion">Categoría</label>
                <input type="text" class=" form-control categoria" id="categoria" name="categoria"
                  aria-describedby="emailHelp" placeholder="ingrese Categoria">
              </div>


              <button type="submit" class="btn btn-primary btn_guardar">Guardar</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Modal Fin -->
    <!-- Modal save productos -->
    <div class="modal fade" id="Modal_pdf_observaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title titulo" id="exampleModalLabel">Observaciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-sm-12 listaObservaciones">

                <div class="custom-control custom-checkbox mb-5">
                  <input type="checkbox" value="HOla" class="custom-control-input chkobservacion" id="chkobservacion"
                    name="chkobservacion[]" />
                  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                </div>


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Fin -->
  <?php
  footerAdmin($data);
  ?>