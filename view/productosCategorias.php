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
          <?php
          include("../model/productoCategorias.controller.php");
          $res = new Categoria();
          

          foreach (array( $res->obtenerCategorias()) as $idCategoria=>$nombreCategoria){
            
            var_dump($idCategoria);

            ?>
          <div class="card col-sm-3">
            <div class="card-body">
              <h5 class="card-title"><?= $nombreCategoria ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>

          <?php } ?>

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