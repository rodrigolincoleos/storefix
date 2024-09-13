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
        <div class="cardshadow">
          <h2 class="card-header">Productos</h2>
          <div class="card-body">

            <table id='dataTableProductos' class="table table-striped table-hover">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>CODIGO</th>
                  <th>MODELO</th>
                  <th>STOCK DISPONIBLE</th>
                  <th>PRECIO NETO</th>
                  <th>IVA</th>
                  <th>PRECIO PUBLICADO</th>
                </tr>
              </thead>
            </table>

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