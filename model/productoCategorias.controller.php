<?php
require_once "conexion.php";

class Categoria
{
  function obtenerCategorias()
  {
    $con = new Conexion();
    $datos = array();
    $sql = $con->conexion()->query("select idCategoria, nombreCategoria from stx_tbl_categorias");

    if ($sql->num_rows > 0) {

      while ($fila = $sql->fetch_row()) {
        $datos[] = $fila;
      }
      echo json_encode($datos);
    }
  }
}
