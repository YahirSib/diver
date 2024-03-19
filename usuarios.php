<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
     <!--Regular Datatables CSS-->
     <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
     <link rel="stylesheet" href="Recursos/css/DataTable.css">
    <title>Diver - Administracion de Usuarios</title>
</head>

<body id="body-pd" class="font-diver">
    <?php
    $pag = "Usuarios";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <div class="flex items-center justify-between mb-5">
            <h1 class="md:text-3xl lg:text-5xl text-2xl  font-bold text-[#101954] ">Administración de Usuarios</h1>
        </div>
        <div class="w-full grid grid-cols-8 grap-3 mb-3">
            <div class="w-full col-span-6 md:col-span-6 lg:col-span-4 relative">
                <label class="absolute left-0 bg-[#101954] flex justify-center items-center h-full rounded-l-lg"><i class='bx bx-search-alt text-white text-xl px-2'></i></label>
                <input type="search" name="txtBuscar" class=" w-full border rounded-lg border-[#101954] border-solid pl-12" placeholder="Buscar" id="txtBuscar">
            </div>
            <div class="w-full flex justify-end items-center col-span-2 md:col-span-2 lg:col-span-4">
                <a type="button" href="agregar_usuario.php" style="font-size: 20px" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 transition-all  flex justify-center items-center"> <i class='bx bx-plus text-white'></i></a>
            </div>
        </div>
    </div>
    <table id="data-users" class="display !w-full nowrap">
        <thead>
            <tr class="bg-[#101954] text-white rounded-t-lg">
                <th>
                    N°
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Rol
                </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody >

        </tbody>
    </table>
    <?php include('Recursos/modals.php'); ?>    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="application/javascript" src="Controlador/scripts/Usuarios/ver_usuarios.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>