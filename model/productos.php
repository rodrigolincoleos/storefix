<?php
require_once "conexion.php";

$con = new Conexion();
$datos = array();
$sql = $con->conexion()->query("SELECT * FROM `stx_tbl_productos` WHERE 1");

if ($sql->num_rows > 0) {

  while ($fila = $sql->fetch_row()) {
    $datos[]= $fila;
  }
echo json_encode(["data"=>$datos]);
  
} 
