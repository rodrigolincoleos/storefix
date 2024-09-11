let dataTable;

let dataTableIsInitialized= false;

const initDataTable = async()=>{
    if (dataTableIsInitialized){
        dataTable.destroy();
    }

    await listarProductos();

    dataTable =$('#table').DataTable({});
    dataTableIsInitialized=true;
}

const listarProductos=async()=>{
    try{
        const response=await fetch("https://jsonplaceholder.typicode.com/users");
        const users=await response.json();
        console.log(users)
        let content='';
        users.forEach((users, index)=>{

            content +=`
            <tr>
            <td>${users.name}</td>
            <td>${users.email}</td>
            <td>${users.address.city}</td>
            <td>${users.company.name}</td>
            </tr>`
        });

        table.innerHTML=content;
        
    }catch(ex){
        alert(ex);
    }
};

window.addEventListener("load", async()=>{
    await listarProductos();
})

  /*  $("#tabla").DataTable({
        "data":users,
        "columns":[
            {"data":'firstName'},
            {"data":'lastName'},
            {"data":'age'},
            {"data":'gender'},
            {"data":'email'}
        ]
       })*/

