
$(document).ready(function(){
    $('#username').focus();

    var estado = true;

    $("#frmLogin").submit(function(e){
        e.preventDefault();
        estado = true;
        if($('#username').val() == "" || $('#contrasena').val() == ""){
            estado = false;
        }
        if(estado == true){
            $.ajax({
                url : 'Controlador/cont.usuarios.php',
                type : 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                success: function(respuesta){
                    console.log(respuesta);
                    var mensaje = JSON.parse(respuesta);
                    if(mensaje.status == true){
                        $('#alert-login').removeClass('hidden');
                        setTimeout(function(e){
                            window.location.assign("dashboard.php");
                        }, 2000);
                    }else{
                        $('#alert-error').removeClass('hidden');
                        $('#alert-error').removeClass('opacity-0');
                    }
                },
                error : function(error){
                    console.log(error);
                    
                }
            });
        }
    })

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

});