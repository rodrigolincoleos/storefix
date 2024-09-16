<?php
class Conexion
{

    public function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "storefix_appmanager");
        $conexion->set_charset("utf8");
        return $conexion;
    }
}
