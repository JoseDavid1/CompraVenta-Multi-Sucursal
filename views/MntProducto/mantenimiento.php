<div id="modalmantenimiento" name="modalmantenimiento" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lbltitulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <!-- TODO:Formulario de Mantenimiento -->
            <form method="post" id="mantenimiento_form">
                <div class="modal-body">
                    <input type="hidden" name="prod_id" id="prod_id"/>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                            <label for="cat_id" class="form-label">Categoría</label>
                                <select id="cat_id" name="cat_id" class="form-control form-select" aria-label="Seleccionar" required>
                                    <!-- <option selected>--Seleccionar--</option> -->

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="prod_nom" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="prod_nom" name="prod_nom" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="prod_descrip" class="form-label">Descripción</label>
                                <textarea type="text" rows="3" class="form-control" id="prod_descrip" name="prod_descrip" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="und_id" class="form-label">Und. Medida</label>
                                <select id="und_id" name="und_id" class="form-control form-select" aria-label="Seleccionar" required>
                                    <!-- <option selected>--Seleccionar--</option> -->

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="mon_id" class="form-label">Moneda</label>
                                <select class="form-control form-select" name="mon_id" id="mon_id" aria-label="Seleccionar" required>
                                    <!-- <option selected>--Seleccionar--</option> -->

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="prod_pcompra" class="form-label">P. Compra</label>
                                <input type="text" class="form-control" id="prod_pcompra" name="prod_pcompra" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="prod_pventa" class="form-label">P. Venta</label>
                                <input type="text" class="form-control" id="prod_pventa" name="prod_pventa" required></textarea>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="valueInput" class="form-label">Stock</label>
                                <input type="text" class="form-control" id="prod_stock" name="prod_stock" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div>
                                <label for="valueInput" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="prod_img" name="prod_img"/>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <div class="text-center">
                            <a id="btnremovephoto" class="btn btn-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-delete-bin-5-line"></i></a>
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <span id="pre_imagen"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="add" class="btn btn-primary ">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>