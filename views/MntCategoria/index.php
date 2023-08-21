<?php
    require_once("../../config/conexion.php");
    require_once("../../models/Rol.php");
    $rol = new Rol();
    $datos = $rol->validar_acceso_rol($_SESSION["USU_ID"],"mntcategoria");
    if(isset($_SESSION["USU_ID"])){  
        if(is_array($datos) and count($datos)>0){
?>


<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <title>CompraVenta | Mnt. Categoría</title>
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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Mantenimiento Categoría</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../home/index.php">Menu</a></li>
                                        <li class="breadcrumb-item active">Mantenimientos</li>
                                        <li class="breadcrumb-item active">Categoría</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h5 class="card-title mb-0">Buttons Datatables</h5> -->
                                <button id="btnnuevo" type="button" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-add-circle-line label-icon align-middle fs-16 me-2"></i> Nuevo Registro</button>
                            </div>
                            <div class="card-body">
                                <div id="buttons-datatables_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">                           
                                    <table id="buttons-datatables" class="display table table-bordered dataTable no-footer" style="width: 100%;" aria-describedby="buttons-datatables_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Fecha Creación</th>
                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Editar</th>
                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>       
                                        
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php require_once("../html/footer.php"); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Modal -->
    <?php require_once("mantenimiento.php"); ?>
    <!-- JS -->
    <?php require_once("../html/js.php"); ?>
    <script type="text/javascript" src="mntcategoria.js"></script>
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