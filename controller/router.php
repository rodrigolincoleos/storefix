<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/'=> 'index.php',
    '/inicio'=>'inicio.php',
    '/adminCrearUsuario'=>'view/adminCrearUsuario.php',
    '/adminGestion'=>'view/adminGestion.php',
    '/adminUsuarios'=>'view/adminUsuarios.php',
    '/adminCrearDistribuidor'=>'view/adminCrearDistribuidor.php',
    '/bodegaDespacho'=>'view/bodegaDespacho.php',
    '/bodegaEncolados'=>'view/bodegaEncolados.php',
    '/bodegaLista'=>'view/bodegaLista.php',
    '/bodegaSeguimiento'=>'view/bodegaSeguimiento.php',
    '/dashboardBodega'=>'view/dashboardBodega.php',
    '/dashboardGerencia'=>'view/dashboardGerencia.php',
    '/dashboardTesoreria'=>'view/dashboardTesoreria.php',
    '/productosCategoria' =>'view/productosCategoria.php',
    '/productosCrear'=>'view/productosCrear.php',
    '/productosLista'=>'view/productosLista.php',
    '/ventaLista'=>'view/ventaLista.php',
    '/ventasOrdenesConfirmadas'=>'view/ventasOrdenesConfirmadas.php',
    '/ventasAnuladas'=>'viewventasAnuladas.php',
    '/ventasNueva'=>'view/ventasNueva.php',
    '/ventasPagadas'=>'view/ventasPagadas.php',
    '/ventasPendientes'=>'view/ventasPendientes.php',
];


function routeToController($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        
        echo " true ";
        echo $routes[$uri];
        require $routes[$uri];
    } else {

        echo 'error';
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "view/{$code}.php";
    die();
}
routeToController($uri, $routes);
