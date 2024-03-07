<!-- Menú -->
<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: login.php");
    }
    
?>
<header class="header" id="header" data-id="<?php echo $_SESSION['id'] ;?>">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div>

        <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="Recursos/media/icono.png" alt="user photo">
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
            <div class="px-4 py-3 text-md text-gray-900 ">
                <div id="nombre-user"></div>
                <div class="font-medium truncate" id="email-user"></div>
            </div>
            <ul class="py-2 text-md text-gray-700 " aria-labelledby="dropdownUserAvatarButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Mi perfil</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Cambiar contraseña</a>
                </li>
            </ul>
            <div class="py-2">
                <a href="Controlador/cont.usuarios.php?cerrar=yes" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 ">Sign out</a>
            </div>
        </div>

    </div>
</header>
<div class="l-navbar" id="nav-bar" style="font-size: 20px">
    <nav class="nav">
        <div> <a href="dashboard.php" class="nav_logo"> <img src="Recursos/media/logo_white.png" style="height: 15px" /> <span class="nav_logo-name">DIVER </span> </a>
            <div class="nav_list">
                <?php
                if ($pag == "Usuarios") {
                ?>
                    <a href="usuarios.php" class="nav_link active"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. de Usuarios</span> </a>
                    <a href="creditos.php" class="nav_link"> <i class="bx bxs-collection"></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class="bx bxs-wallet"></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                if ($pag == "Dashboard") {
                ?>
                    <a href="usuarios.php" class="nav_link"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. de Usuarios</span> </a>
                    <a href="creditos.php" class="nav_link"> <i class="bx bxs-collection"></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class="bx bxs-wallet"></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                if ($pag == "Creditos") {
                    ?>
                        <a href="usuarios.php" class="nav_link"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. de Usuarios</span> </a>
                        <a href="creditos.php" class="nav_link active"> <i class="bx bxs-collection"></i><span class="nav_name">Creditos Fiscal</span> </a>
                        <a href="#" class="nav_link"> <i class="bx bxs-wallet"></i><span class="nav_name">Bancos</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>
</div>