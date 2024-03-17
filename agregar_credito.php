<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
    <title>Diver - Agregar Usuario</title>
</head>

<body id="body-pd">
    <?php
    $pag = "Creditos";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <h1 class="text-5xl font-extrabold mb-8 text-[#101954]">Subir Credito</h1>
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg text-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Emitido</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-lg" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Recibido</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form class="" id="frmAgregarEmitido" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <label for="n-credito" class="block mb-2  font-medium text-xl">N° de Credito: <span style="color: red">*</span></label>
                                <input type="number" id="n-credito" name="n-credito" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                <div id="errorN-credito"></div>
                            </div>
                            <div class="mb-6">
                                <label for="receptor" class="block mb-2 font-medium text-xl">Emitido A: <span style="color: red">*</span></label>
                                <input style="font-size: 20px" type="text" id="receptor" name="receptor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                <div id="errorReceptor"></div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <label for="correo" class="block mb-2  font-medium text-xl">Correo electronico: <span style="color: red">*</span></label>
                                <input type="text" id="correo" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                <div id="errorCorreo"></div>
                            </div>
                            <div class="mb-6">
                                <label for="monto" class="block mb-2  font-medium text-xl">Monto: <span style="color: red">*</span></label>
                                <input style="font-size: 20px" type="text" id="monto" name="monto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                <div id="errorMonto"></div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6 ">
                                <label for="rol" class="block mb-2 font-medium text-xl">Tipo de credito:<span style="color: red">*</span></label>
                                <select name="rol" id="rol" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                    <option value="null">--Seleccione Tipo--</option>
                                    <option value="DTE">DTE</option>
                                    <option value="Fisico">Fisico</option>
                                </select>
                                <div id="errorCorreo"></div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end items-end">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 ">Agregar</button>
                            <a href="usuarios.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  ">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <form class="" id="frmAgregar" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <label for="n-credito" class="block mb-2  font-medium text-xl">N° de Credito: <span style="color: red">*</span></label>
                                <input type="number" id="n-credito" name="n-credito" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                <div id="errorN-credito"></div>
                            </div>
                            <div class="mb-6">
                                <label for="receptor" class="block mb-2  font-medium text-xl">Recibido de: <span style="color: red">*</span></label>
                                <input style="font-size: 20px" type="text" id="receptor" name="receptor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                <div id="errorReceptor"></div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <label for="correo" class="block mb-2 font-medium text-xl">Correo electronico: <span style="color: red">*</span></label>
                                <input type="text" id="correo" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                <div id="errorCorreo"></div>
                            </div>
                            <div class="mb-6">
                                <label for="monto" class="block mb-2  font-medium text-xl">Monto: <span style="color: red">*</span></label>
                                <input style="font-size: 20px" type="text" id="monto" name="monto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                <div id="errorMonto"></div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6 ">
                                <label for="rol" class="block mb-2  font-medium text-xl">Tipo de credito:<span style="color: red">*</span></label>
                                <select name="rol" id="rol" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                                    <option value="null">--Seleccione Tipo--</option>
                                    <option value="DTE">DTE</option>
                                    <option value="Fisico">Fisico</option>
                                </select>
                                <div id="errorCorreo"></div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end items-end">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 ">Agregar</button>
                            <a href="usuarios.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  ">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/agregar_usuarios.js"></script>
</body>

</html>