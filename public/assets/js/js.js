function DataTabla(id = '.tabla', ordenar = [0, "desc"]) { 
    return new DataTable(id,{ 
        order: [ordenar], 
        language: { 
            decimal: "", 
            emptyTable: "No hay datos disponibles en la tabla", 
            info: "Mostrando  _START_ a _END_ de _TOTAL_ entradas ", 
            infoEmpty: "No hay registros disponibles ", 
            infoFiltered: "(filtered from _MAX_ total entradas )", 
            infoPostFix: "", 
            thousands: ",", 
            lengthMenu: "Mostrar _MENU_ entradas ", 
            loadingRecords: "Cargando...", 
            processing: "Procesando...", 
            search: "Buscar:", 
            zeroRecords: "No ha coincidencias", 
            paginate: { 
                first: "Primero", 
                last: "Último", 
                next: "Siguiente", 
                previous: "Anterior" 
            }, 
            aria: { 
                sortAscending: "Activar para ordenar la columna ascendente", 
                sortDescending: "Activar para ordenar la columna descendente" 
            } 
        } 
    });
}