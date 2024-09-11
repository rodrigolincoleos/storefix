<?php
require_once "conexion.php";


class Productos
{

    public function listar()
    {
        $con = new Conexion();
        $sql = $con->conexion()->query("SELECT * FROM `stx_tbl_productos` WHERE 1");
        while ($data = mysqli_fetch_object($sql)) {


          /* $columns= [
                "id"=>$data->id,
                "codigo"=>$data->codigo,
                "modelo"=>$data->modelo,
                "nombre"=>$data->nombre,
                "stockMinimo"=>$data->stockMinimo,
                "precio_base"=>$data->precio_base,
                "precio_web"=>$data->precio_web
            
            ];
          $jsondata="[".(string)$data."]";
            $newjsondata=json_encode($jsondata);
       file_put_contents('data.json',$jsondata);*/
       echo json_encode($data);
        }
    }
}
