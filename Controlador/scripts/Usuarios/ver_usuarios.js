$(document).ready(function() {

    //Carga los nav de la paginacion
    function cantUsuarios(){
        let action = "cantUsuarios";
        $.ajax({
            url : 'Controlador/cont.usuarios.php',
            type : 'POST',
            data: {
                action: action,
            },
            success: function(respuesta){
                let resultado = "";
                let cant = 0;
                let cantDato = JSON.parse(respuesta);
                if(cantDato.status === false){
                    resultado = cantDato.msg;
                }else{
                    cant = cantDato.cantidad;
                    if(cant > 0){
                        resultado += `
                            <li>
                                <a activado="true" id="pagination_1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                            </li>
                        `;
                    }
                    if(cant > 10){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_2" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                            </li>
                        `;
                    }
                    if(cant > 20 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_3" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">3</a>
                            </li>
                        `;
                    }
                    if(cant > 30 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_4" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                            </li>
                        `;
                    }
                    if(cant > 40 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_5" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                            </li>
                        `;
                    }
                    if(cant > 50 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_6" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">6</a>
                            </li>
                        `;
                    }
                    if(cant > 60 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_7" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">7</a>
                            </li>
                        `;
                    }
                    if(cant > 70 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_8" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">8</a>
                            </li>
                        `;
                    }
                    if(cant > 80 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_9" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">9</a>
                            </li>
                        `;
                    }
                    if(cant > 90 ){
                        resultado += `
                            <li>
                                <a activado="false" id="pagination_10" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">10</a>
                            </li>
                        `;
                    }
                }
                $('#ul_pagination').html(resultado);
            },
            error : function(error){
                console.log(error);
            }
        });
    }

    //Funcion para mostrar Usuarios
    function mostrarUsuarios(num){
        let action = "mostrar";
        $.ajax({
            url : 'Controlador/cont.usuarios.php',
            type: 'POST',
            data: {
                action : action,
                num: num
            },
            success: function (respuesta){
                var resultado = "";
                var usuarios = JSON.parse(respuesta);
                if(usuarios.status == false){
                    resultado = usuarios.msg;
                }else{
                    let i = 1;
                    usuarios.data.forEach(usuario => {
                        resultado += `
                        <tr class="bg-white">
                            <td class="py-4 px-6">
                                <b>${i}</b>
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.nombre}</b>
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.apellido}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.correo}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.rol}</b> 
                            </td>
                            <td class="py-4 px-6 flex justify-evenly items-center flex-wrap">
                                <a  href="editar_usuario.php?id=${usuario.id}" style="font-size: 20px" class="editar font-medium text-green-600 underline dark:text-green-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-edit'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px; " class="eliminar font-medium text-red-600 underline dark:text-red-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-trash'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px; " class="contra font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-reset'></i></a>
                            </td>
                        </tr>        
                        `
                        i++;
                    });
                }
                $('#items').html(resultado);
            },
            error: function (error){
                console.log(error);
            }
        });
    }

    //Buscar Usuario
    $(document).on('change', '#txtBuscar', function (e){
        let action = "buscar";
        let val = $('#txtBuscar').val();
        $.ajax({
            url : 'Controlador/cont.usuarios.php',
            type: 'POST',
            data: {
                action : action,
                val: val
            },
            success: function (respuesta){
                var resultado = "";
                var usuarios = JSON.parse(respuesta);
                if(usuarios.status == false){
                    resultado = usuarios.msg;
                }else{
                    let i = 1;
                    usuarios.data.forEach(usuario => {
                        resultado += `
                        <tr class="bg-white">
                            <td class="py-4 px-6 ">
                                <b>${i}</b>
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.nombre}</b>
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.apellido}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.correo}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.rol}</b> 
                            </td>
                            <td class="py-4 px-6 flex justify-evenly items-center flex-wrap">
                                <a  href="editar_usuario.php?id=${usuario.id}" style="font-size: 20px" class="editar font-medium text-green-600 underline dark:text-green-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-edit'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px; " class="eliminar font-medium text-red-600 underline dark:text-red-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-trash'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px;  " class="contra font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-reset'></i></a>
                            </td>
                        </tr>        
                        `
                        i++;
                    });
                }
                $('#items').html(resultado);
            },
            error: function (error){
                console.log(error);
            }
        });
    });

    //Cargar Cantidad de Usuarios
    cantUsuarios();

    //Cargar Usuarios segun layout de paginacion
    if ($("#items").length) {
        mostrarUsuarios(10);
    }

    $(document).on('click', '#pagination_1', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_1").attr('activado', 'true');
        mostrarUsuarios(10);
    });

    $(document).on('click', '#pagination_2', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_2").attr('activado', 'true');
        mostrarUsuarios(20);
    });

    $(document).on('click', '#pagination_3', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_3").attr('activado', 'true');
        mostrarUsuarios(30);
    });

    $(document).on('click', '#pagination_4', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_4").attr('activado', 'true');
        mostrarUsuarios(40);
    });

    $(document).on('click', '#pagination_5', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_5").attr('activado', 'true');
        mostrarUsuarios(50);
    });

    $(document).on('click', '#pagination_6', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_6").attr('activado', 'true');
        mostrarUsuarios(60);
    });

    $(document).on('click', '#pagination_7', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_7").attr('activado', 'true');
        mostrarUsuarios(70);
    });

    $(document).on('click', '#pagination_8', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_8").attr('activado', 'true');
        mostrarUsuarios(80);
    });

    $(document).on('click', '#pagination_9', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_9").attr('activado', 'true');
        mostrarUsuarios(90);
    });

    $(document).on('click', '#pagination_10', function(e){
        $('[activado = "true"]').attr('activado', 'false');
        $("#pagination_10").attr('activado', 'true');
        mostrarUsuarios(100);
    });


    //Modal eliminar
    $(document).on('click', '.eliminar', function () {
        let id = $(this).attr("data_id");
        var modal = "";
        modal += `
        <div id='fondoM' modal-backdrop='' class='fondo bg-gray-900 bg-opacity-50 fixed inset-0 z-40'></div>
        <div id="question" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full items-center justify-center" >
        <div class="relative p-4 w-full max-w-md h-full md:h-auto flex justify-center items-center">
            <div class="relative bg-white rounded-lg shadow w-full">
                <div class="p-6 text-center">
                    <i class='bx bx-question-mark' style='color:#2a3891; font-size: 50px' ></i>                
                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Está seguro(a) de eliminar al personal con id: `+ id + `?</h3>
                    <button id="borrar" data-id="`+ id + `" style="font-size: 20px"  type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Aceptar</button>
                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</button>
                </div>
            </div>
        </div>
        `;
        $("body").append(modal);
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

    //RESETEAR CONTRASEÑA DE USUARIO
    $(document).on('click', '.contra', function () {
        let id = $(this).attr("data_id");
        var modal = "";
        modal += `
            <div z-50 id='fondoM' modal-backdrop='' class='fondo bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-50'></div>
                        <div id="contrasena" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow">
                                    <div class="flex justify-between items-start p-4 rounded-t border-b d">
                                        <h1 class="text-5xl font-extrabold "><span>Resetear</span> <span> contraseña</span></h1>
                                    </div>
                                    <!--Fomrulario-->
                                    <div class="p-6 space-y-6">
                                        <form id="fmrContra" data_id="${id}">
                                            <div class="mb-6">
                                                <label style="font-size: 20px" for="contraNueva" class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña Nueva: <span style="color: red">*</span></label>
                                                <input style="font-size: 20px" type="password" id="contraNueva" name="contraNueva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required>
                                            </div>
                                            <div class="mb-6">
                                                <label style="font-size: 20px" for="contraConf" class="block mb-2 text-sm font-medium text-gray-900 ">Confirmar contraseña: <span style="color: red">*</span></label>
                                                <input style="font-size: 20px" type="password" id="contraConf" name="contraConf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "required>
                                            </div>
                                            <button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Guardar</button>
                                            <a id="cerrar" style="font-size: 20px"  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>   
        `;
        $("body").append(modal);
    });



    //JQUERY para cerrar todos los modales
    $(document).on('click', '#cerrar', function () {
        $("#question").remove();
        $("#fondoM").remove();
        $("#error").remove();
        $("#success").remove();
        $("#edit").remove();
        $("#agg").remove();
        $("#contrasena").remove();
        let num = $('[activado = "true"]').text();
        num = parseInt(num);
        num = (num) * 10;
        mostrarUsuarios(num);
    });

});