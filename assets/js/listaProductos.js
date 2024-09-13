let dataTable;

let dataTableIsInitialized = false;

const initDataTable = async () => {
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }

    await listarProductos();

    dataTable = $('#table').DataTable({});
    dataTableIsInitialized = true;
}

const listarProductos = async () => {
    $(document).ready(function () {
        $('#dataTableProductos').DataTable(
            {
                ajax:'../../model/productos.php',
                columnDefs:[{
                    targets:0,
                    visible:false
                }]
            }


        );
    });
};

window.addEventListener("load", async () => {
    await listarProductos();
})

