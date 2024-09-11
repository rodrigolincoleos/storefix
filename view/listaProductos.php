<!DOCTYPE html>

<?php 
include("../controller/headListaProducto.php"); 
require_once "../model/productos.php";
$res  = new Productos();
?>

<body>
  <div class="wrapper">
    <?php
    include("../view/sidebar.php");
    ?>
    <div class="main p-3">
      <div class="text-center">
        <h1>
          StoreFix
        </h1>
        <div class="cardshadow">
          <h5 class="card-header">Productos</h5>
          <div class="card-body">
            <table class="table table-striped table-hover" id="tabla">
              <thead class="thead-dark">
                <tr>
                  <th></th>
                  <th>MODELO</th>
                  <th>NOMBRE PRODUCTO</th>
                  <th>STOCK DISPONIBLE</th>
                  <th>PRECIO NETO</th>
                  <th>IVA</th>
                  <th>PRECIO PUBLICADO</th>
                  <th>OPCIONES</th>
                </tr>
              </thead>
              <tbody id='table'></tbody>
            </table>
          </div>
          <?= $res->listar() ?>
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
  <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>

  <script src="../assets/js/listaProductos.js "></script>

</body>

</html>