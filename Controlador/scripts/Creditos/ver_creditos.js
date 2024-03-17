
$(document).ready(function(e) {
    let action = "mostrar";
    var date = new Date();
    var tabla = $('#data-creditos').DataTable({
        ajax:{
            url: "Controlador/cont.creditos.php",
            type: "POST",
            data: {
                action : action,
                tipo: 'emitido',
                mes: date.getMonth() + 1
            }, 
        } ,
        primaryKey: "id",
        columns: [
            {
                "data" : "n_credito",
                className: 'text-center'
            },
            {
                "data" : "descripcion",
                className: 'text-center'
            },
            {
                "data" : "emitido_a",
                className: 'text-center'
            },
            {
                "data" : "monto",
                className: 'text-center'
            },
            {
                "data" : "tipo_doc",
                className: 'text-center'
            },
            {
                "data" : null,
                title: null,
                render: function(e){
                    return `<i  data-id='${e.id}' class='eliminar bx bxs-trash text-xl text-red-500 cursor-pointer' ></i> <a href="editar_usuario.php?n=${e.id}"><i class='editar bx bxs-edit-alt text-xl text-green-500 cursor-pointer' ></i></a>`;
                }

            }
        ],
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla =(",
            "sInfo": "Mostrando creditos del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando creditos del 0 al 0 de un total de 0 usuarios",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sNext": ">",
                "sPrevious": "<"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
        },
        dom: 'dtip',
        scrollX: true,
        ordering: false,
        pageLength: 30
    });              
  

    var tabla2 = $('#data-recibidos').DataTable({
        ajax:{
            url: "Controlador/cont.creditos.php",
            type: "POST",
            data: {
                action : action,
                tipo: 'recibido',
                mes: date.getMonth() + 1
            }, 
        } ,
        primaryKey: "id",
        columns: [
            {
                "data" : "n_credito",
                className: 'text-center'
            },
            {
                "data" : "descripcion",
                className: 'text-center'
            },
            {
                "data" : "recibido_de",
                className: 'text-center'
            },
            {
                "data" : "monto",
                className: 'text-center'
            },
            {
                "data" : "tipo_doc",
                className: 'text-center'
            },
            {
                "data" : null,
                title: null,
                render: function(e){
                    return `<i  data-id='${e.id}' class='eliminar bx bxs-trash text-xl text-red-500 cursor-pointer' ></i> <a href="editar_usuario.php?n=${e.id}"><i class='editar bx bxs-edit-alt text-xl text-green-500 cursor-pointer' ></i></a>`;
                }

            }
        ],
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla =(",
            "sInfo": "Mostrando creditos del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando creditos del 0 al 0 de un total de 0 usuarios",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sNext": ">",
                "sPrevious": "<"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
        },
        dom: 'dtip',
        scrollX: true,
        ordering: false,
        pageLength: 30
    });              
  
    
    $('#dashboard-styled-tab').click(function(e){
        tabla2.ajax.reload();
    });

    //Modal eliminar
    $(document).on('click', '.eliminar', function () {
        $("#popup-eliminar").attr('arial-hidden', 'false');
        $("#popup-eliminar").addClass('flex');
        $("#popup-eliminar").removeClass('hidden');
        $("#popup-eliminar").attr('aria-modal', 'true');
        $("#popup-eliminar").attr('role', 'dialog');
        $("body").addClass('overflow-hidden');
        $("body").append('<div modal-backdrop="" data-dinamic="yes" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>');
        id = $(this).attr('data-id');
        $('#txtNumero').text(id);
        $('#btnAceptar').attr('data-id', id);
    });

    $('[data-modal-hide="popup-eliminar"]:not(#btnAceptar)').click(function(e){
        $('[data-dinamic="yes"]').remove();
    });

    $('#txtBuscar1').on('keyup', function(e){
        tabla.search(this.value).draw();
    });

    $('#txtBuscar2').on('keyup', function(e){
        tabla2.search(this.value).draw();
    });

    $("#btnAceptar").click(function(e){
        $('[data-dinamic="yes"]').remove();
        let action = "eliminar";
        let id = $(this).attr('data-id');
        $.ajax({
            url: 'Controlador/cont.usuarios.php',
            type: 'POST',
            data: {
                action: action,
                id: id
            },
            success: function (respuesta) {
                console.log(respuesta);
                var area = JSON.parse(respuesta);
                if (area.status == false) {
                    $('.mesanjeModal').text('Error al eliminar usuario');
                } else {
                    $('.mesanjeModal').text('Usuario eliminado con exito!');
                    tabla.ajax.reload();
                }
            }
        });
        
    });

});