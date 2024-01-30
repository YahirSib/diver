<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
    <title>Diver - Administracion de Usuarios</title>
</head>

<body id="body-pd">
    <?php
    $pag = "Usuarios";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-5xl font-extrabold text-[#101954] ">Administración de Usuarios</h1>
        </div>
        <div class="w-full grid grid-cols-8 grap-3 mb-3">
            <div class="w-full col-span-4">
                <div class="w-full grid grid-cols-10 rounded-lg border border-gray-200 border-solid">
                    <label class="col-span-2 bg-gray-200 flex items-center rounded-l-lg justify-center" for="buscar"><i class='bx bx-search-alt text-xl'></i></label>
                    <input type="search" name="txtBuscar" class="col-span-8 w-full col-span-7 border-0 rounded-r-lg" id="txtBuscar">
                </div>
                
            </div>
            <div class="w-full flex justify-end items-center col-span-4">
                <a type="button" href="agregar_usuario.php" style="font-size: 20px" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 transition-all  flex justify-center items-center"> <i class='bx bx-plus text-white'></i></a>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-1 md:gap-6">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50" style="font-size: 20px">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            N°
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombre
                        </th>
                        <th scope="col" class="py-3 px-6 ">
                            Apellido
                        </th>
                        <th scope="col" class="py-3 px-6 ">
                            Correo
                        </th>
                        <th scope="col" class="py-3 px-6 ">
                            Rol
                        </th>
                        <th scope="col" class="py-3 px-6 rounded-l-lg">

                        </th>
                    </tr>
                </thead>
                <tbody class="text-xl" id="items">

                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul id="ul_pagination" class="flex items-center justify-end -space-x-px h-8 text-sm">

            </ul>
        </nav>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/ver_usuarios.js"></script>
</body>

</html>