$(document).ready(function(){

    var action = "detalles";
    var id = $('body').attr('data-id');
    $.ajax({
        url: 'Controlador/cont.usuarios.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        success: function(res){
            var data = JSON.parse(res);
            if(data.status == false){
                $('button[data-modal-target="popup-agregarRes"]').click();
                $('.confirmAgregar').text('Error al cargar usuario.'); 
            }else{
                $('#nombre').val(data.data.nombre);
                $('#apellido').val(data.data.apellido);
                $('#username').val(data.data.username);
                $('#correo').val(data.data.correo);
                $('#rol').val(data.data.rol);
            }
        },
        error: function(res){
            console.log(res);
        }
    });


    $('#frmEditar').submit(function(e){
        var estado = true;
        //validar nombre
        estado = $('#nombre').attr('status');
        if(estado == "true"){
            estado = $('#apellido').attr('status');
            if(estado == "true"){
                estado = $('#correo').attr('status');
                if(estado == "true"){
                    estado = $('#username').attr('status');
                }
            }
        }
        
        if (estado == "true") {
            $.ajax({
                url: 'Controlador/cont.usuarios.php',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                success: function (respuesta) {
                    console.log(respuesta);
                    var mensaje = JSON.parse(respuesta);
                    if (mensaje.status == false) {
                        $('button[data-modal-target="popup-agregarRes"]').click();
                        $('.confirmAgregar').text('Ocurrio un error, contactar a soporte.'); 
                    } else {
                        console.log(respuesta);
                        $('button[data-modal-target="popup-agregarRes"]').click();
                        $('.confirmAgregar').text('Usuario editado con exito!');
                        setTimeout(function(e){
                            window.location.assign("usuarios.php");
                        }, 1500);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }else{
            $('button[data-modal-target="popup-agregarRes"]').click();
            $('.confirmAgregar').text('Datos de usuario incorrectos.'); 
        }
    e.preventDefault();  
    });

    $('#nombre').on('keyup', function(e){
        let texto = $('#nombre').val();
        let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
        alertPop = $('#popover-click');
        if(!validar.test(texto)){
            alertPop.removeClass('text-green-500');
            alertPop.removeClass('bg-green-200');
            alertPop.removeClass('border-green-400');
            alertPop.addClass('text-red-500');
            alertPop.addClass('bg-red-200');
            alertPop.addClass('border-red-400');
            $('#paramNombre1 i').removeClass('bx-check');
            $('#paramNombre1 i').addClass('bx-x');
            $('#nombre').attr('status', 'false');
        }else{
            alertPop.removeClass('text-red-500');
            alertPop.removeClass('bg-red-200');
            alertPop.removeClass('border-red-400');
            alertPop.addClass('text-green-500');
            alertPop.addClass('bg-green-200');
            alertPop.addClass('border-green-400');
            $('#paramNombre1 i').addClass('bx-check');
            $('#paramNombre1 i').removeClass('bx-x');
            $('#nombre').attr('status', 'true');
        }
    });

    $('#apellido').on('keyup', function(e){
        let texto = $('#apellido').val();
        let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
        alertPop = $('#popover-apellido');
        if(!validar.test(texto)){
            alertPop.removeClass('text-green-500');
            alertPop.removeClass('bg-green-200');
            alertPop.removeClass('border-green-400');
            alertPop.addClass('text-red-500');
            alertPop.addClass('bg-red-200');
            alertPop.addClass('border-red-400');
            $('#paramApellido1 i').removeClass('bx-check');
            $('#paramApellido1 i').addClass('bx-x');
            $('#apellido').attr('status', 'false');
        }else{
            alertPop.removeClass('text-red-500');
            alertPop.removeClass('bg-red-200');
            alertPop.removeClass('border-red-400');
            alertPop.addClass('text-green-500');
            alertPop.addClass('bg-green-200');
            alertPop.addClass('border-green-400');
            $('#paramApellido1 i').addClass('bx-check');
            $('#paramApellido1 i').removeClass('bx-x');
            $('#apellido').attr('status', 'true');
        }
    });

    $('#username').on('keyup', function(e){
        let texto = $('#username').val();
        let validar = /^[a-zA-Z]+\.[a-zA-Z]+$/;
        alertPop = $('#popover-username');
        if(!validar.test(texto)){
            alertPop.removeClass('text-green-500');
            alertPop.removeClass('bg-green-200');
            alertPop.removeClass('border-green-400');
            alertPop.addClass('text-red-500');
            alertPop.addClass('bg-red-200');
            alertPop.addClass('border-red-400');
            $('#paramUsername1 i').removeClass('bx-check');
            $('#paramUsername1 i').addClass('bx-x');
            $('#username').attr('status', 'false');
        }else{
            alertPop.removeClass('text-red-500');
            alertPop.removeClass('bg-red-200');
            alertPop.removeClass('border-red-400');
            alertPop.addClass('text-green-500');
            alertPop.addClass('bg-green-200');
            alertPop.addClass('border-green-400');
            $('#paramUsername1 i').addClass('bx-check');
            $('#paramUsername1 i').removeClass('bx-x');
            $('#username').attr('status', 'true');
        }
    });

    $('#contrasena').on('keyup', function(e){
        let texto = $('#contrasena').val();
        let validar = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
        alertPop = $('#popover-contrasena');
        if(!validar.test(texto)){
            //Error no minusculas
            let validar1 = /^(?=.*[a-z])([A-Za-z\d$@$!%*?&]|[^ ]){0,15}$/;
            colorValidar($('#paramContra3'), $('#paramContra3 i'), validar1.test(texto));

            //Error no mayusculas
            let validar2 = /^(?=.*[A-Z])([A-Za-z\d$@$!%*?&]|[^ ]){0,15}$/;
            colorValidar($('#paramContra2'), $('#paramContra2 i'), validar2.test(texto));

            //Error no signo especial
            let validar3 = /^(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){0,15}$/;
            colorValidar($('#paramContra4'), $('#paramContra4 i'), validar3.test(texto));

            //Error no numero
            let validar4 = /^(?=.*\d)([A-Za-z\d$@$!%*?&]|[^ ]){0,15}$/;
            colorValidar($('#paramContra5'), $('#paramContra5 i'), validar4.test(texto));

            //Erro no cumplea de 8 a 15
            let validar5 = /^([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
            colorValidar($('#paramContra1'), $('#paramContra1 i'), validar5.test(texto));

            alertPop.removeClass('bg-green-200');
            alertPop.removeClass('border-green-400');
            alertPop.addClass('bg-red-200');
            alertPop.addClass('border-red-400');
            $('#contrasena').attr('status', 'false');
        }else{
            $('#alertasContra').children('p').removeClass('text-red-500');
            $('#alertasContra').children('p').addClass('text-green-500');
            $('#alertasContra').children('p').find('i').addClass('bx-check');
            $('#alertasContra').children('p').find('i').removeClass('bx-x');
            alertPop.removeClass('text-red-500');
            alertPop.removeClass('bg-red-200');
            alertPop.removeClass('border-red-400');
            alertPop.addClass('text-green-500');
            alertPop.addClass('bg-green-200');
            alertPop.addClass('border-green-400');
            $('#contrasena').attr('status', 'true');
        }
    });

    $('#correo').on('keyup', function(e){
        let texto = $('#correo').val();
        let validar = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        alertPop = $('#popover-correo');
        if(!validar.test(texto)){
            alertPop.removeClass('text-green-500');
            alertPop.removeClass('bg-green-200');
            alertPop.removeClass('border-green-400');
            alertPop.addClass('text-red-500');
            alertPop.addClass('bg-red-200');
            alertPop.addClass('border-red-400');
            $('#paramCorreo1 i').removeClass('bx-check');
            $('#paramCorreo1 i').addClass('bx-x');
            $('#correo').attr('status', 'false');
        }else{
            alertPop.removeClass('text-red-500');
            alertPop.removeClass('bg-red-200');
            alertPop.removeClass('border-red-400');
            alertPop.addClass('text-green-500');
            alertPop.addClass('bg-green-200');
            alertPop.addClass('border-green-400');
            $('#paramCorreo1 i').addClass('bx-check');
            $('#paramCorreo1 i').removeClass('bx-x');
            $('#correo').attr('status', 'true');
        }
    });

    function colorValidar(p, icon, res){
        if(!res){
            p.removeClass('text-green-500');
            p.addClass('text-red-500');
            icon.addClass('bx-x');
            icon.removeClass('bx-check');
        }else{
            p.addClass('text-green-500');
            p.removeClass('text-red-500');
            icon.removeClass('bx-x');
            icon.addClass('bx-check');
        }
    }

    $('#lock').click(function(e){
        if($(this).attr('data-status') == "block"){
            $(this).attr('data-status', 'mira');
            $(this).html("<i class='bx bxs-lock-open-alt text-lg'></i>")
            $('#contrasena').attr('type', 'text');
        }else{
            $(this).attr('data-status', 'block');
            $(this).html("<i class='bx bxs-lock-alt text-lg'></i>")
            $('#contrasena').attr('type', 'password');
        }
    });

})