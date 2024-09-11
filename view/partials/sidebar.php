<?php

include ("headSidebar.php");
include ("../controller/router.php");

?>

<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">StoreFix</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#productos" aria-expanded="false" aria-controls="auth">

                <i class="lni lni-package"></i>
                <span>Productos</span>
            </a>
            <ul id="productos" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/productosLista" class="sidebar-link">Lista Productos</a>
                </li>
                <li class="/sidebar-item">
                    <a href="productosCategoria" class="sidebar-link">Categoría Productos</a>
                </li>
                <li class="sidebar-item">
                    <a href="/productosCrear" class="sidebar-link">Nuevo Producto</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Clientes</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#venta" aria-expanded="false" aria-controls="auth">

                <i class="lni lni-cart"></i>
                <span>Venta</span>
            </a>
            <ul id="venta" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/ventasNueva" class="sidebar-link">Nueva Cotización</a>
                </li>
                <li class="sidebar-item">
                    <a href="/ventaLista" class="sidebar-link">Lista Cotizaciónes</a>
                </li>
                <li class="sidebar-item">
                    <a href="/ventasOrdenesConfirmadas" class="sidebar-link">Ordenes Confirmadas</a>
                </li>
                <li class="sidebar-item">
                    <a href="/ventasPendientes" class="sidebar-link">Pendientes de Pago</a>
                </li>
                <li class="sidebar-item">
                    <a href="/ventasPagadas" class="sidebar-link">Pagadas</a>
                </li>
                <li class="sidebar-item">
                    <a href="/ventasAnuladas" class="sidebar-link">Anuladas</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#bodega" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-home"></i>
                <span>Bodega</span>
            </a>
            <ul id="bodega" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="bodegaEncolados" class="sidebar-link">Pedidos Encolados</a>
                </li>
                <li class="sidebar-item">
                    <a href="/bodegaDespacho" class="sidebar-link">Despacho Orden de Venta</a>
                </li>
                <li class="sidebar-item">
                    <a href="/bodegaSeguimiento" class="sidebar-link">Seguimiento Orden de Venta</a>
                </li>
                <li class="sidebar-item">
                    <a href="/bodegaLista" class="sidebar-link">Todos los Pedidos</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
        data-bs-target="#dashboards" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-clipboard"></i>
                <span>Dashboards</span>
            </a>
            <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/dashboardBodega" class="sidebar-link">Bodega</a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboardTesoreria" class="sidebar-link">Tesorería</a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboardGerencia" class="sidebar-link">Gerencia</a>
                </li> 
            </ul>

        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#admin" aria-expanded="false" aria-controls="multi">
                <i class="lni lni-protection"></i>
                <span>Admin</span>
            </a>
            <ul id="admin" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/adminUsuarios" class="sidebar-link">Adm Usuarios</a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminCrearUsuario" class="sidebar-link">Nuevo Usuario</a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminCrearDistribuidor" class="sidebar-link">Nuevo Distribuiodr</a>
                </li> 
                <li class="sidebar-item">
                    <a href="/adminGestion" class="sidebar-link">Gestion Precios</a>
                </li> 
            </ul>
        </li>

        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="../assets/js/sidebarScript.js"></script>