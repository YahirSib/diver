$(document).ready(function(){
    var estado = true;

    $("#frmLogin").submit(function(e){
        e.preventDefault();
        estado = true;
        if($('#username').val() == ""){
            var resultado = "";
            resultado += '<p id="mensaje">Campo usuario Vacio</p>';
            $('#errorUsername').html(resultado);
            estado = false;
        }
        if($('#contrasena').val() == ""){
            var resultado = "";
            resultado += '<p id="mensaje">Campo contraseña Vacio</p>';
            $('#errorContrasena').html(resultado);
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
                    var resultado = "";
                    var mensaje = JSON.parse(respuesta);
                    if(mensaje.status == true){
                        window.location.assign("dashboard.php");
                    }else{
                        resultado =  `<p> ${mensaje.msg} </p>`;
                        $('#errorLogin').html(resultado);
                    }
                },
                error : function(error){
                    console.log(error);
                }
            });
        }
    })
});