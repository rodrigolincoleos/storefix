<!DOCTYPE html>

<?php
include("partials/headListaProducto.php");
?>

<body>
  <script src='../assets/js/listaProductos.js'></script>
  <div class="wrapper">
    <?php
    include("../view/partials/sidebar.php");
    ?>
    <div class="main p-3">
      <div class="text-center">
        <h1>
          StoreFix
        </h1>
        <div class="d-flex justify-content-center mt-3">
          <div class="card card-shadow">
            <div class="card-header">
              <h5>Nuevo Producto</h5>
            </div>
            <div class="card-body">
              <div class="row mx-3">
                <div class="col-8">
                  <form id="formulario">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="nombreProducto">Nombre Producto</label>
                          <input name="nombreProducto" type="text" id="nombreProducto" class="form-control">
                          <span id="nombreProductoError" class="text-sm mt-2 hidden"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="modeloProducto">Modelo Producto</label>
                          <input name="modeloProducto" type="text" id="modeloProducto" class="form-control">
                          <span id="modeloProductoError" class="text-sm mt-2 hidden"></span>
                        </div>
                      </div>

                      <div class="form-group col-8">
                        <label for="categoriaProducto">Categoria Producto</label>
                        <select class="form-control" name="categoriaProducto" id="categoriaProducto">
                          <option value="0" selected>Seleccione una Categoria</option>
                          <?php
                          foreach ($listaCategorias as $categoria) {
                            echo "<option value={$categoria['id']}>{$categoria['nombre']}</option>";
                          }
                          ?>
                        </select>
                        <span id="categoriaProductoError" class="text-sm mt-2 hidden"></span>
                      </div>

                      <div class="form-group col-4">
                        <label for="precioProducto">Precio Neto</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" disabled>$</div>
                          </div>
                          <input name="precioProducto" type="text" id="precioProducto" class="form-control">
                        </div>
                        <span id="precioProductoError" class="text-sm mt-2 hidden"></span>
                      </div>
                      <div class="form-group col-4">
                        <label for="ivaProducto">IVA</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" disabled>$</div>
                          </div>
                          <input name="ivaProducto" type="text" id="ivaProducto" class="form-control" readonly>
                        </div>
                      </div>
                      <div class="form-group col-4">
                        <label for="precioConIvaProducto">Precio con IVA</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" disabled>$</div>
                          </div>
                          <input name="precioConIvaProducto" type="text" id="precioConIvaProducto" class="form-control" readonly>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="form-group">
                          <label for="altoProducto">Alto</label>
                          <div class="input-group">
                            <input name="altoProducto" type="text" id="altoProducto" class="form-control">
                            <div class="input-group-append">
                              <div class="input-group-text" disabled>cm</div>
                            </div>
                          </div>
                          <span id="altoProductoError" class="text-sm mt-2 hidden"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="largoProducto">Largo</label>
                          <div class="input-group">

                            <input name="largoProducto" type="text" id="largoProducto" class="form-control">
                            <div class="input-group-append">
                              <div class="input-group-text" disabled>cm</div>
                            </div>
                          </div>
                          <span id="largoProductoError" class="text-sm mt-2 hidden"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="anchoProducto">Ancho</label>
                          <div class="input-group">

                            <input name="anchoProducto" type="text" id="anchoProducto" class="form-control">
                            <div class="input-group-append">
                              <div class="input-group-text" disabled>cm</div>
                            </div>
                          </div>
                          <span id="anchoProductoError" class="text-sm mt-2 hidden"></span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>



                <div class="col-4 border rounded imagen d-flex justify-content-center align-items-center">
                  <input name="subirFotoHidden" type="file" class="hidden" id="subirFotoHidden" name="archivo1" accept=".jpg, .jpeg, .png" />
                  <div class="d-flex flex-column justify-content-center align-items-center h-100 subirFoto">
                    <div>
                      <i class="lni lni-image" style="font-size: 10em;"></i>
                    </div>
                    <h6>Subir foto</h6>
                  </div>
                </div>
              </div>
              <div class="row mt-4 mx-4 d-flex justify-content-end">
                <button class="btn btn-primary" id="crearProducto">Crear Producto</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <!-- jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- DataTables-->
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>



</body>

</html>