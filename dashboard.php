<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
    <title>Diver - Dashboard</title>
</head>

<body id="body-pd" class="min-h-[80vh]">
    <?php
    $pag = "Dashboard";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full h-full justify-center items-center min-h-[80vh] mt-8 ">
        <img class="w-4/5" src="Recursos/media/logo_completo.png">
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/detalles_usuario.js"></script>
</body>

</html>