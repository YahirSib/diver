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
                <form class="" id="frmAgregarEmitido" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-nCredito" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="nCredito" name="nCredito" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="nCredito" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">N° de credito fiscal: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-nCredito" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramnCredito1"> <i class='bx bx-x h-full'></i> N° de credito minimo de 3 digitos.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-emitidoA" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="emitidoA" name="emitidoA" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="emitidoA" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Emitido A: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-emitidoA" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramemitidoA1"> <i class='bx bx-x h-full'></i> Persona a quien se emite minima de 3 letras.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-correo1" data-popover-trigger="click" data-popover-placement="bottom" type="email" id="correo1" name="correo1" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="correo1" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo electronico: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-correo1" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramCorreo1-1"> <i class='bx bx-x h-full'></i> Cumple el formato "ejemplo@ejemplo.ejem".</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-monto" data-popover-trigger="click" data-popover-placement="bottom"  type="text" id="monto" name="monto" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="monto" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Monto: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-monto" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div id="alertasMonto" class="px-3 py-2">
                                            <p id="paramMonto1"> <i class='bx bx-x h-full'></i> Cumple el formato 000.00</p>
                                            <p id="paramMonto2"> <i class='bx bx-x h-full'></i> El monto es mayor que 0</p>
                                            <p id="paramMonto3"> <i class='bx bx-x h-full'></i> No contiene ningun caracter difetente a numerico.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-fecha2" data-popover-trigger="click" data-popover-placement="bottom" type="date" id="fecha2" name="fecha2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="fecha2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Fecha: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-fecha2" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramfecha2-1"> <i class='bx bx-x h-full'></i> Cumple el formato "dd/mm/aaaa" .</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <select name="tipo2" id="tipo2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <option value="Fisico">Fisico</option>
                                        <option value="DTE">DTE</option>
                                    </select>
                                    <label for="tipo2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Tipo: <span class="text-red-500">(*)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="mb-6">
                                <div class="relative">
                                    <textarea status="false" data-popover-target="popover-descipcion2" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="descipcion2" name="descipcion2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                                    <label for="descipcion2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Descripción: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-descipcion2" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramdescipcion2-1"> <i class='bx bx-x h-full'></i> No excede los 1000 caractes.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <a href="creditos.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  "><i class='bx bxs-chevron-left'></i></a>
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 "><i class='bx bxs-file-plus'></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <form class="" id="frmRecibido" enctype="multipart/form-data">
                    <div class="md:order-1">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-nCredito2" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="nCredito2" name="nCredito2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="nCredito2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">N° de credito fiscal: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-nCredito2" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramnnCredito2-1"> <i class='bx bx-x h-full'></i> N° de credito minimo de 3 digitos.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-recibidoDe" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="recibidoDe" name="recibidoDe" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="recibidoDe" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Recibido de: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-recibidoDe" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramrecibidoDe1"> <i class='bx bx-x h-full'></i> Persona de quien recibe el credito, minima de 3 letras.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-correo2" data-popover-trigger="click" data-popover-placement="bottom" type="email" id="correo2" name="correo2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="correo2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo electronico: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-correo2" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramCorreo2-1"> <i class='bx bx-x h-full'></i> Cumple el formato "ejemplo@ejemplo.ejem".</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-monto2" data-popover-trigger="click" data-popover-placement="bottom"  type="text" id="monto2" name="monto2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="monto2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Monto: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-monto2" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div id="alertasMonto2" class="px-3 py-2">
                                            <p id="paramMonto1"> <i class='bx bx-x h-full'></i> Cumple el formato 000.00</p>
                                            <p id="paramMonto2"> <i class='bx bx-x h-full'></i> El monto es mayor que 0</p>
                                            <p id="paramMonto3"> <i class='bx bx-x h-full'></i> No contiene ningun caracter difetente a numerico.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-6">
                                <div class="relative">
                                    <input status="false" data-popover-target="popover-fecha" data-popover-trigger="click" data-popover-placement="bottom" type="date" id="fecha" name="fecha" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="fecha" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Fecha: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-fecha" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramfecha1"> <i class='bx bx-x h-full'></i> Cumple el formato "dd/mm/aaaa" .</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <select name="tipo" id="tipo" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <option value="Fisico">Fisico</option>
                                        <option value="DTE">DTE</option>
                                    </select>
                                    <label for="tipo" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Tipo: <span class="text-red-500">(*)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="mb-6">
                                <div class="relative">
                                    <textarea status="false" data-popover-target="popover-descipcion" data-popover-trigger="click" data-popover-placement="bottom" type="text" id="descipcion" name="descipcion" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                                    <label for="descipcion" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Descripción: <span class="text-red-500">(*)</span></label>
                                    <div data-popover id="popover-descipcion" role="tooltip" class="absolute z-20 invisible inline-block w-full text-sm text-red-500 transition-opacity duration-300 bg-red-200 border border-red-400 rounded-lg shadow-sm opacity-0 ">
                                        <div class="px-3 py-2">
                                            <p id="paramdescipcion1"> <i class='bx bx-x h-full'></i> No excede los 1000 caractes.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <input type="hidden" value="agregar" id="action" name="action">
                            <a href="creditos.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  "><i class='bx bxs-chevron-left'></i></a>
                            <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 "><i class='bx bxs-file-plus'></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <?php include('Recursos/modals.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Recursos/js/jquery.mask.js"></script>
    <script src="Controlador/scripts/Creditos/agregar_creditos.js"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>