<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    $array = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    ?>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/css/DataTable.css">
    <title>Diver - Creditos Fiscales</title>
</head>

<body id="body-pd" class="font-diver">
    <?php
    $pag = "Creditos";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <div class="flex items-center justify-between mb-5">
            <h1 class="md:text-3xl lg:text-5xl text-2xl  font-bold text-[#101954] ">Creditos fiscales de <?php echo $array[date('n') - 1];?></h1>
        </div>
    </div>
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-white bg-[#101954] dark:text-purple-500 dark:hover:text-purple-500 border-white dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-3 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Emitidos</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-3 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Recibidos</button>
            </li>
        </ul>
    </div>
    <div id="default-styled-tab-content">
        <div class="hidden rounded-lg " id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="w-full grid grid-cols-8 grap-3 mb-3">
                <div class="w-full col-span-6 md:col-span-6 lg:col-span-4 relative">
                    <label class="absolute left-0 bg-[#101954] flex justify-center items-center h-full rounded-l-lg"><i class='bx bx-search-alt text-white text-xl px-2'></i></label>
                    <input type="search" name="txtBuscar1" class=" w-full border rounded-lg border-[#101954] border-solid pl-12" placeholder="Buscar" id="txtBuscar1">
                </div>
                <div class="w-full flex justify-end items-center col-span-2 md:col-span-2 lg:col-span-4">
                    <a type="button" href="agregar_credito.php" style="font-size: 20px" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 transition-all  flex justify-center items-center"> <i class='bx bx-plus text-white'></i></a>
                </div>
            </div>
            <table id="data-creditos" class="display !w-full nowrap">
                <thead>
                    <tr class="bg-[#101954] text-white rounded-t-lg">
                        <th>
                            N° Credito
                        </th>
                        <th>
                            Concepto
                        </th>
                        <th>
                            Emitido a
                        </th>
                        <th>
                            Monto
                        </th>
                        <th>
                            Tipo Documento
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>
                <tbody >

                </tbody>
            </table>
        </div>
        <div class="hidden rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="w-full grid grid-cols-8 grap-3 mb-3">
                <div class="w-full col-span-6 md:col-span-6 lg:col-span-4 relative">
                    <label class="absolute left-0 bg-[#101954] flex justify-center items-center h-full rounded-l-lg"><i class='bx bx-search-alt text-white text-xl px-2'></i></label>
                    <input type="search" name="txtBuscar2" class=" w-full border rounded-lg border-[#101954] border-solid pl-12" placeholder="Buscar" id="txtBuscar2">
                </div>
                <div class="w-full flex justify-end items-center col-span-2 md:col-span-2 lg:col-span-4">
                    <a type="button" href="agregar_credito.php" style="font-size: 20px" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 transition-all  flex justify-center items-center"> <i class='bx bx-plus text-white'></i></a>
                </div>
            </div>
            <table id="data-recibidos" class="display !w-full nowrap">
                <thead>
                    <tr class="bg-[#101954] text-white rounded-t-lg">
                        <th class="text-left">
                            N° Credito
                        </th>
                        <th class="text-left">
                            Concepto
                        </th>
                        <th class="text-left">
                            Recibido de
                        </th>
                        <th class="text-left">
                            Monto
                        </th>
                        <th class="text-left">
                            Tipo Documento
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>
                <tbody >

                </tbody>
            </table>
        </div>
    </div>   
    <?php include('Recursos/modals.php'); ?>    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="application/javascript" src="Controlador/scripts/Creditos/ver_creditos.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>