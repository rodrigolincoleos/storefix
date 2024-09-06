<?php
class Conexion
{

    public function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "storefix_testing");
        $conexion->set_charset("utf8");
        return $conexion;
    }
}
