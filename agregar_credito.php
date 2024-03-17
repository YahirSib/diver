<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
    <title>Diver - Agregar Credito</title>
</head>

<body id="body-pd" class="font-diver">
    <?php
    $pag = "Creditos";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <h1 class="md:text-3xl lg:text-5xl text-2xl  font-bold text-[#101954] mb-5">Añadir nuevo credito fiscal</h1>
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
                <form class="" id="frmAgregar" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-click" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="nombre" name="nombre" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="nombre" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-click" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramNombre1"> <i class='bx bx-x h-full'></i> Nombre minimo de 3 letras.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-apellido" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="apellido" name="apellido" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="apellido" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Apellido: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-apellido" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramApellido1"> <i class='bx bx-x h-full'></i> Apellido minimo de 3 letras.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-username" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="username" name="username" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="username" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre de Usuario: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-username" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramUsername1"> <i class='bx bx-x h-full'></i> Cumple el formato "texto.texto" .</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-contrasena" data-popover-trigger="click" data-popover-placement="bottom"  type="password" id="contrasena" name="contrasena" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <span id="lock" data-status="block" class="absolute right-0 top-0 h-full flex justify-center items-center mr-2"><i class='bx bxs-lock-alt text-lg' ></i></span>
                                    <label for="contrasena" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Contraseña: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-contrasena" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div id="alertasContra" class="px-3 py-2">
                                            <p id="paramContra1"> <i class='bx bx-x h-full'></i> Minimo 8, Maximo 15 caracteres.</p>
                                            <p id="paramContra2"> <i class='bx bx-x h-full'></i> Contiene 1 Mayuscula</p>
                                            <p id="paramContra3"> <i class='bx bx-x h-full'></i> Contiene 1 Minuscula</p>
                                            <p id="paramContra4"> <i class='bx bx-x h-full'></i> Contiene 1 Signo especial ($@!%*?&)</p>
                                            <p id="paramContra5"> <i class='bx bx-x h-full'></i> Contiene 1 Numero</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-correo" data-popover-trigger="click" data-popover-placement="bottom" type="email" id="correo" name="correo" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="correo" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-correo" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramCorreo1"> <i class='bx bx-x h-full'></i> Cumple el formato "ejemplo@ejemplo.ejem".</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <select name="rol" id="rol" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Secretario">Secretario</option>
                                        <option value="Consultor">Consultor</option>
                                    </select>
                                    <label for="rol" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo: <span class="text-red-500">(*)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <a href="usuarios.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  "><i class='bx bxs-chevron-left'></i></a>
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 "><i class='bx bxs-user-plus'></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <form class="" id="frmAgregar" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-click" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="nombre" name="nombre" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="nombre" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">N° de Credito fiscal: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-click" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramNombre1"> <i class='bx bx-x h-full'></i> Nombre minimo de 3 letras.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <select name="rol" id="rol" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Secretario">Secretario</option>
                                        <option value="Consultor">Consultor</option>
                                    </select>
                                    <label for="rol" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo: <span class="text-red-500">(*)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-username" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="username" name="username" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="username" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre de Usuario: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-username" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramUsername1"> <i class='bx bx-x h-full'></i> Cumple el formato "texto.texto" .</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-contrasena" data-popover-trigger="click" data-popover-placement="bottom"  type="password" id="contrasena" name="contrasena" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <span id="lock" data-status="block" class="absolute right-0 top-0 h-full flex justify-center items-center mr-2"><i class='bx bxs-lock-alt text-lg' ></i></span>
                                    <label for="contrasena" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Contraseña: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-contrasena" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div id="alertasContra" class="px-3 py-2">
                                            <p id="paramContra1"> <i class='bx bx-x h-full'></i> Minimo 8, Maximo 15 caracteres.</p>
                                            <p id="paramContra2"> <i class='bx bx-x h-full'></i> Contiene 1 Mayuscula</p>
                                            <p id="paramContra3"> <i class='bx bx-x h-full'></i> Contiene 1 Minuscula</p>
                                            <p id="paramContra4"> <i class='bx bx-x h-full'></i> Contiene 1 Signo especial ($@!%*?&)</p>
                                            <p id="paramContra5"> <i class='bx bx-x h-full'></i> Contiene 1 Numero</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-correo" data-popover-trigger="click" data-popover-placement="bottom" type="email" id="correo" name="correo" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="correo" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-correo" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramCorreo1"> <i class='bx bx-x h-full'></i> Cumple el formato "ejemplo@ejemplo.ejem".</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <select name="rol" id="rol" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Secretario">Secretario</option>
                                        <option value="Consultor">Consultor</option>
                                    </select>
                                    <label for="rol" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo: <span class="text-red-500">(*)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <a href="usuarios.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  "><i class='bx bxs-chevron-left'></i></a>
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 "><i class='bx bxs-user-plus'></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <?php include('Recursos/modals.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Recursos/js/jquery.mask.js"></script>
    <script src="Controlador/scripts/Usuarios/agregar_credito.js"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>