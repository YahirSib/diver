$(document).ready(function() {

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
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                            </li>
                        `;
                    }
                    if(cant > 10){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                            </li>
                        `;
                    }
                    if(cant > 20 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">3</a>
                            </li>
                        `;
                    }
                    if(cant > 30 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                            </li>
                        `;
                    }
                    if(cant > 40 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                            </li>
                        `;
                    }
                    if(cant > 50 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">6</a>
                            </li>
                        `;
                    }
                    if(cant > 60 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">7</a>
                            </li>
                        `;
                    }
                    if(cant > 70 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">8</a>
                            </li>
                        `;
                    }
                    if(cant > 80 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">9</a>
                            </li>
                        `;
                    }
                    if(cant > 90 ){
                        resultado += `
                            <li>
                                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">10</a>
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
                            <td class="py-4 px-6">
                                <a  href="editar_personal.php?id=${usuario.id}" style="font-size: 20px" class="editar font-medium text-green-600 underline dark:text-green-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-edit'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px;  margin-left: 10px" class="eliminar font-medium text-red-600 underline dark:text-red-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-trash'></i></a>
                                <a  data_id="${usuario.id}" style="font-size: 20px;  margin-left: 10px" class="contra font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-reset'></i></a>
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

    cantUsuarios();

    if ($("#items").length) {
        mostrarUsuarios(10);
    }


});