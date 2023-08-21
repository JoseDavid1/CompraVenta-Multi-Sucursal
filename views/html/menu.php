<?php
    require_once("../../models/Menu.php");
    $menu = new Menu();
    /* TODO: Obtener listado de acceso por ROL ID del Usuario */
    $datos = $menu->get_menu_x_rol_id($_SESSION["ROL_ID"]);
?>      

      <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../../assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../../assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../../assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../../assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <!-- Opcion del menu sin multinivel-->
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <?php
                    foreach ($datos as $row) {
                       if ($row["MEN_GRUPO"]=="Dashboard" && $row["MEND_PERMI"]=="Si"){
                            ?>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo $row["MEN_RUTA"];?>">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps"><?php echo $row["MEN_NOM"];?></span>
                            </a>
                        </li>                        
                        <?php
                        }
                    }
                ?>                    

                        <!-- Menu con multinivel -->
                        <li class="menu-title"><span data-key="t-menu">Transaccionales</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-dashboards">Mantenimientos</span>
                            </a>
                                <div class="collapse menu-dropdown" id="sidebarDashboards">
                                    <ul class="nav nav-sm flex-column">
                                    <?php
                                        foreach ($datos as $row) {
                                        if ($row["MEN_GRUPO"]=="Mantenimiento" && $row["MEND_PERMI"]=="Si"){
                                    ?>
                                        <li class="nav-item">
                                            <a href="<?php echo $row["MEN_RUTA"];?>" class="nav-link" data-key="t-categoria"><!-- <i class="ri-tools-fill"></i> --> <?php echo $row["MEN_NOM"];?> </a>
                                        </li>
                                    <?php
                                            }
                                        }
                                    ?>
<!--                                         <li class="nav-item">
                                            <a href="../MntCliente/index.php" class="nav-link" data-key="t-cliente"> Cliente </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntCompania/index.php" class="nav-link" data-key="t-compania"> Compañía </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntEmpresa/index.php" class="nav-link" data-key="t-empresa"> Empresa </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntMoneda/index.php" class="nav-link" data-key="t-moneda"> Moneda </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntProducto/index.php" class="nav-link" data-key="t-producto"> Producto </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntProveedor/index.php" class="nav-link" data-key="t-proveedor"> Proveedor </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntRol/index.php" class="nav-link" data-key="t-rol"> Rol </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntSucursal/index.php" class="nav-link" data-key="t-sucursal"> Sucursal </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntUndMedida/index.php" class="nav-link" data-key="t-undmedida"> Unidad de Medida </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../MntUsuario/index.php" class="nav-link" data-key="t-usuario"> Usuario </a>
                                        </li> -->
                                    </ul>
                                </div>
                        </li> 
                        
                        <!-- Opcion del menu sin multinivel-->
                        <li class="menu-title"><span data-key="t-menu">Compra y Venta</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                <i class="ri-install-line"></i> <span data-key="t-dashboards">Compra</span>
                            </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <?php
                                            foreach ($datos as $row) {
                                            if ($row["MEN_GRUPO"]=="Compra" && $row["MEND_PERMI"]=="Si"){
                                        ?>
                                            <li class="nav-item">
                                                <a href="<?php echo $row["MEN_RUTA"];?>" class="nav-link" data-key="t-compra"><!-- <i class="ri-tools-fill"></i> --> <?php echo $row["MEN_NOM"];?> </a>
                                            </li>
                                            <?php
                                                    }
                                                }
                                            ?>
                                    </ul>
                                </div>
                        </li>

                        <!-- Opcion del menu sin multinivel-->
                        <!-- <li class="menu-title"><span data-key="t-menu">Venta</span></li> -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="ri-uninstall-line"></i> <span data-key="t-dashboards">Venta</span>
                            </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                    <?php
                                        foreach ($datos as $row) {
                                        if ($row["MEN_GRUPO"]=="Venta" && $row["MEND_PERMI"]=="Si"){
                                    ?>
                                        <li class="nav-item">
                                            <a href="<?php echo $row["MEN_RUTA"];?>" class="nav-link" data-key="t-venta"><!-- <i class="ri-tools-fill"></i> --> <?php echo $row["MEN_NOM"];?> </a>
                                        </li>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                        </li> 


                        <!-- Opcion del menu sin multinivel-->
                        <li class="menu-title"><span data-key="t-menu">Opcional</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>