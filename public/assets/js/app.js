// app.js
$(document).ready(function () {

    // transform table-results into datatable
    $('#table-results').DataTable({
        paging: true,
        oredering: true,
        pageLength: 10,
        pagingType: "full_numbers",
        
        //datatable in portuguese language
        language: {
            decimal: "",
            emptyTable: "Nenhum registo encontrado.",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registos",
            infoEmpty: "Mostrando 0 a 0 de 0 registos",
            infoFiltered: "(Filtrando de _MAX_ registos totais)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "Mostrar _MENU_ registos",
            search: "Pesquisar:",
            zeroRecords: "Nenhum registo encontrado.",
            paginate: {
                first: "Primeiro",
                last: "Último",
                next: "Próximo",
                previous: "Anterior",
            }
        }
    });
});