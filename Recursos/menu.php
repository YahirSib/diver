<!-- Menú -->
<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: login.php");
    }
    
?>
<header class="header " id="header" data-id="<?php echo $_SESSION['id'] ;?>">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div>

        <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm rounded-full md:me-0" type="button">
            <img class="w-8 h-8 rounded-full" src="Recursos/media/icono.png" alt="user photo">
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow">
            <div class="px-4 py-3 text-md text-white bg-[#101954] rounded-t-lg">
                <div id="nombre-user" class="text-center"></div>
                <div class="font-medium truncate text-center" id="email-user"></div>
            </div>
            <ul class="py-2 text-md text-gray-700 font-diver" aria-labelledby="dropdownUserAvatarButton">
                <li>
                    <a href="#" class="block px-4 py-2 text-right">Mi perfil</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-right">Cambiar contraseña</a>
                </li>
            </ul>
            <div class="">
                <a href="Controlador/cont.usuarios.php?cerrar=yes" class="block px-4 py-2 text-md text-gray-700 hover:bg-[#101954] hover:rounded-b-lg hover:text-white">Sign out</a>
            </div>
        </div>

    </div>
</header>
<div class="l-navbar" id="nav-bar" style="font-size: 20px">
    <nav class="nav">
        <div> <a href="dashboard.php" class="nav_logo"> <img src="Recursos/media/logo_white.png" style="height: 15px" /> <span class="nav_logo-name">DIVER </span> </a>
            <div class="nav_list font-diver">
                <?php
                if ($pag == "Usuarios") {
                ?>
                    <a href="usuarios.php" class="nav_link active"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. Usuarios</span> </a>
                    <a href="creditos.php" class="nav_link"> <i class="bx bxs-collection"></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class="bx bxs-wallet"></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                if ($pag == "Dashboard") {
                ?>
                    <a href="usuarios.php" class="nav_link"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. Usuarios</span> </a>
                    <a href="creditos.php" class="nav_link"> <i class="bx bxs-collection"></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class="bx bxs-wallet"></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                if ($pag == "Creditos") {
                    ?>
                        <a href="usuarios.php" class="nav_link"> <i class="bx bxs-group"></i> <span class="nav_name">Admin. Usuarios</span> </a>
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