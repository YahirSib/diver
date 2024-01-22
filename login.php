<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link para framweork Tailwind CSS-->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <!-- Links para template menú-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--Link para aplicar fuente-->
    <link href="http://fonts.cdnfonts.com/css/tw-cen-mt-condensed" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            font-family: 'Tw Cen MT Condensed', 'sans-serif';
        }
    </style>

    <title>Login</title>
</head>

<body class="bg-gray-50 ">
    <div class="w-screen h-screen flex justify-center items-center bg-[#101954]">
        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 ">
            <form class="space-y-6" id="frmLogin" enctype="multipart/form-data">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                    <img src="Media/logo.png" alt="logo" style="display: block; margin-left: auto; margin-right: auto; width: 45%;">
                </a>
                <div>
                    <label style="font-size: 20px" for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username:</label>
                    <input style="font-size: 20px" type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="diver.user" required="">
                    <div id="errorUsuario"></div>
                </div>
                <div>
                    <label style="font-size: 20px" for="contrasena" class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña:</label>
                    <input style="font-size: 20px" type="password" name="contrasena" id="contrasena" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required="">
                    <div id="errorContra"></div>
                </div>
                <input type="hidden" value="login" id="action" name="action">
                <button style="font-size: 20px" type="submit" class="w-full focus:outline-none text-white bg-[#C60505] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Ingresar al sistema</button>
                <div style="font-size: 20px" class="text-sm text-center font-medium text-gray-500 ">
                    ¿Ha olvidado su contraseña? <br> <a href="#" class="text-[#C60505] hover:underline ">Ingrese aquí</a>
                </div>
                <div id="errorLogin"></div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/login.js"></script>

</body>

</html>