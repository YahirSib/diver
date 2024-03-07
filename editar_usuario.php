<?php
    if(empty($_GET['id'])){
        header("location: error.php");
    }else{
        $id = $_GET['id'];
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('Recursos/head.php');
    ?>
    <title>Diver - Editar Usuario</title>
</head>

<body id="body-pd" data-id="<?php echo $id;?>">
    <?php
    $pag = "Usuarios";
    include('Recursos/menu.php');
    ?>
    <div class="flex w-full flex-col mt-8 ">
        <h1 class="text-5xl font-extrabold mb-8 text-[#101954]">Editar Usuario</h1>
        <form class="" id="frmEditar" enctype="multipart/form-data">
            <div class="md:order-1">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-xl">Nombre: <span style="color: red">*</span></label>
                        <input type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                        <div id="errorNombre"></div>
                    </div>
                    <div class="mb-6">
                        <label for="apellido" class="block mb-2 text-sm font-medium text-xl">Apellido: <span style="color: red">*</span></label>
                        <input style="font-size: 20px" type="text" id="apellido" name="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                        <div id="errorApellido"></div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6">
                        <label for="username" class="block mb-2 text-sm font-medium text-xl">Username: <span style="color: red">*</span></label>
                        <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                        <div id="errorUsername"></div>
                    </div>
                    <div class="mb-6">
                        <label for="correo" class="block mb-2 text-sm font-medium text-xl">Correo: <span style="color: red">*</span></label>
                        <input type="email" id="correo" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                        <div id="errorCorreo"></div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6 ">
                        <label for="rol" class="block mb-2 text-sm font-medium text-xl">Rol: <span style="color: red">*</span></label>
                        <select name="rol" id="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-xl" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Secretario">Secretario</option>
                            <option value="Consultor">Consultor</option>
                        </select>
                        <div id="errorCorreo"></div>
                    </div>
                </div>
                <div class="w-full flex justify-end items-end">
                    <input type="hidden" value="editar" id="action" name="action">
                    <input type="hidden" value="<?php echo $id ;?>" id="id" name="id">
                    <button type="submit" class="focus:outline-none text-xl text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 mr-2 ">Agregar</button>
                    <a href="usuarios.php" class="text-gray-900 text-xl bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg px-5 py-2.5 mr-2  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="Controlador/scripts/Usuarios/editar_usuario.js"></script>
</body>

</html>