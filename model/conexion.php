<?php
class Conexion
{

    public function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "storefix_test");
        $conexion->set_charset("utf8");
        return $conexion;
    }
}
