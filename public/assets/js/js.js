function DataTabla(id = '.tabla', ordenar = [0, "desc"]) {
    return new DataTable(id, {
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

function consultaOpsa(tipo = "seguro", mes, anio) {
    $.ajax({
        url: "http://10.32.126.134/opsa/public/api/v1/listarestadisticas_opsa/" + tipo + "/" + mes + "/" + anio,
        type: "GET",
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function (dato) { }
    }).done(function (dato) {
        $.each(dato.observaciones, (index, value) => {
            $('#opsa_'+tipo).find('*').each(function (index_) {
                let name = $(this).attr('name');
                if (name) {
                    if (index == name) {
                        $(this).val(value);
                    }
                }
            });
        })
        if(tipo=="seguro"){
            $('#cantidad_seguro').val(dato.cantidad);
        }else if(tipo=="inseguro"){
            $('#cantidad_inseguro').val(dato.cantidad);
        }
        console.log("Exioso")
    }).fail(function (dato) {
        console.log("Error")
    });
}
function consultaOpsa2(mes, anio){
    consultaOpsa("seguro", mes, anio);
    consultaOpsa("inseguro", mes, anio);
}