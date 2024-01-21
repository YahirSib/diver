<!-- Menú -->
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div>
        <div class="header_img"> <img src="" alt="hola"> </div>
    </div>
</header>
<div class="l-navbar" id="nav-bar" style="font-size: 20px">
    <nav class="nav">
        <div> <a href="dashboard.php" class="nav_logo"> <img src="media/logo-menu.png" style="height: 30px" /> <span class="nav_logo-name">DIVER </span> </a>
            <div class="nav_list">
                <?php
                if ($pag == "Usuarios") {
                ?>
                    <a href="usuarios.php" class="nav_link active"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Administación de Usuarios</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                if ($pag == "Dashboard") {
                ?>
                    <a href="usuarios.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Administación de Usuarios</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Creditos Fiscal</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Bancos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Interno</span> </a>
                <?php
                }
                ?>
            </div>
        </div>
        <div>
            <a href="controlador/cerrarSesion.php?cerrar=yes" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar sesión</span> </a>
        </div>
    </nav>
</div>