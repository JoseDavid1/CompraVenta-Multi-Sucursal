<?php
    require_once("../../config/conexion.php");
    require_once("../../models/Rol.php");
    $rol = new Rol();
    $datos = $rol->validar_acceso_rol($_SESSION["USU_ID"],"mntperfil");
    if(isset($_SESSION["USU_ID"])){
        if(is_array($datos) and count($datos)>0){
?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <title>CompraVenta | Mnt. Perfil</title>
    <?php require_once("../html/head.php"); ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Header ========== -->
        <?php require_once("../html/header.php"); ?>
        

        <!-- ========== App Menu ========== -->
        <?php require_once("../html/menu.php"); ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Mantenimiento Perfil</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../home/index.php">Menu</a></li>
                                        <li class="breadcrumb-item active">Mantenimientos</li>
                                        <li class="breadcrumb-item active">Perfil</li>
                                    </ol>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="col-xxl-4 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="txtpass">
                                                    </div>
                                                </div>

                                                <div class="col-xxl-4 col-md-6">
                                                    <div>
                                                        <label for="labelInput" class="form-label">Confirmar Contraseña</label>
                                                        <input type="password" class="form-control" id="txtpassconfirm">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="labelInput" class="form-label">&nbsp;</label>
                                                        <button type="button" id="btnguardar" class="form-control btn btn-success btn-label waves-effect waves-light"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once("../html/footer.php"); ?>
        </div>

    </div>

    <?php require_once("../html/js.php"); ?>
    <script type="text/javascript" src="mntperfil.js"></script>
</body>

</html>
<?php
    }else{
        header("Location:".Conectar::ruta()."views/404/");
    }
    }else{
        header("Location:".Conectar::ruta()."views/404/");
    }
?>