<?php
if(isset($_SESSION['id'])){
    header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Link para aplicar fuente-->
    <link href="Recursos/css/output.css" type="text/css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-gray-50 font-diver">
    <div class="w-screen md:p-0 p-2 h-screen flex justify-center items-center bg-[#101954]">
        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 ">
            <form class="space-y-6" id="frmLogin" enctype="multipart/form-data">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                    <img src="Recursos/media/logo.png" alt="logo" style="display: block; margin-left: auto; margin-right: auto; width: 45%;">
                </a>
                <div class="flex justify-center items-center relative">
                    <label for="username" class="absolute h-full left-0 text-sm font-medium text-white bg-[#101954] flex justify-center items-center rounded-l-lg p-2"><i class='bx bxs-user text-xl'></i></label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#101954] focus:border-[#101954] block w-full pl-12 py-2.5 " placeholder="diver.user" required="">
                </div>
                <div class="flex justify-center items-center relative">
                    <label for="contrasena" class="absolute h-full left-0 text-sm font-medium text-white bg-[#101954] flex justify-center items-center rounded-l-lg p-2"><i class='bx bxs-key text-xl'></i></label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#101954] focus:border-[#101954] block w-full pl-12 py-2.5 " required="">
                    <span id="lock" data-status="block" class="absolute right-0 mr-2"><i class='bx bxs-lock-alt text-lg' ></i></span>
                </div>
                <input type="hidden" value="login" id="action" name="action">
                <button type="submit" class="w-full focus:outline-none text-white bg-[#C60505] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Ingresar</button>
                <div class="text-sm text-center font-medium text-gray-500 ">
                    ¿Ha olvidado su contraseña? <br> <a href="#" class="text-[#C60505] hover:underline ">Ingrese aquí</a>
                </div>
            </form>
        </div>
        <div id="alert-login" class="absolute bottom-0 flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800 hidden" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                Inicio de sesión exitoso porfavor espere....
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-login" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
        <div id="alert-error" class="absolute bottom-0 flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 hidden" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                Credenciales incorrectas, volver a intentar
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-error" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/login.js"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>