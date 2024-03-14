
$(document).ready(function(e) {
    let action = "mostrar";
    var tabla = $('#data-users').DataTable({
        ajax:{
            url: "Controlador/cont.usuarios.php",
            type: "POST",
            data: {
                action : action
            }, 
        } ,
        primaryKey: "id",
        columns: [
            {"data" : "id"},
            {"data" : "nombre"},
            {"data" : "apellido"},
            {"data" : "correo"},
            {"data" : "rol"},
            {
                "data" : null,
                title: null,
                render: function(e){
                    return `<i  data-id='${e.id}' class='eliminar bx bxs-trash text-xl text-red-500 cursor-pointer' ></i> <i data-id='${e.id}' class='editar bx bxs-edit-alt text-xl text-green-500 cursor-pointer' ></i>`;
                }

            }
        ],
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla =(",
            "sInfo": "Mostrando usuarios del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando usuarios del 0 al 0 de un total de 0 usuarios",
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
  
    //Modal eliminar
    $(document).on('click', '.eliminar', function () {
        $("#popup-eliminar").attr('arial-hidden', 'false');
        $("#popup-eliminar").addClass('flex');
        $("#popup-eliminar").removeClass('hidden');
        $("#popup-eliminar").attr('aria-modal', 'true');
        $("#popup-eliminar").attr('role', 'dialog');
        $("body").addClass('overflow-hidden');
        $("body").append('<div modal-backdrop="" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>');
        id = $(this).attr('data-id');
        $('#txtNumero').text(id);
        $('#btnAceptar').attr('data-id', id);
    });

    $('[data-modal-hide="popup-eliminar"]').click(function(e){
        $('[modal-backdrop=""]').remove();
    });

    $('#txtBuscar').on('keyup', function(e){
        tabla.search(this.value).draw();
    });

    $("#btnAceptar").click(function(e){
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

    //PROCESO DE ELIMINAR
    $(document).on('click', '#borrar', function () {
        $("#question").remove();
        let action = "eliminar";
        let id = $(this).attr("data-id");
        $.ajax({
            url: 'Controlador/cont.usuarios.php',
            type: 'POST',
            data: {
                action: action,
                id: id
            },
            success: function (respuesta) {
                var area = JSON.parse(respuesta);
                if (area.status == false) {
                    var modal = "";
                    modal += `
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("body").append(modal);
                } else {
                    var modal = "";
                    modal += `
                    <div id="success" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="p-6 text-center">
                                    <i class='bx bx-check-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¡Personal eliminado con éxito!</h3>
                                    <button id="cerrar" style="font-size: 20px" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("body").append(modal);
                }
            }
        });
        cantUsuarios();
        let num = $('[activado = "true"]').text();
        num = parseInt(num);
        num = (num) * 10;
        mostrarUsuarios(num);
    });


});