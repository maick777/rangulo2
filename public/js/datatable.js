$(document).ready(function () {
    $('#datatable').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        pageLength: 7,
        "order": [0, 'desc'],
        "bInfo": true,
        "lengthChange": false,
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Total: _MAX_ ",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": " |  Encontrados: _TOTAL_",
            "search": "🔎︎",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "⏵",
                "previous": "⏴"
            },
            "edit": {
                "button": "Editar",
                "title": "Editar Registro",
                "submit": "Actualizar"
            },
            buttons: [
                {
                    text: 'Reload',
                    action: function (e, dt, node, config) {
                        dt.search('').draw();
                    }
                }
            ]

        }
    });


});


$('.dataTables_filter input').on('mouseup', function() {
    table.draw()
  })