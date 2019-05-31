    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg-udp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-pencil"></i> Editar Pieza</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask" method="post" id="upd" name="upd">
                        <div id="result2"></div> 
                        <div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Id de la Pieza
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12" type="" name="mod_id" id="mod_id" readonly="on">
                    </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="mod_name" id="mod_name" class="form-control col-md-7 col-xs-12" required type="text" placeholder="Nombre Pieza">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <textarea name="description" id="description" class="form-control col-md-7 col-xs-12" required type="" placeholder="Descripción de la Pieza"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="mod_precio" id="mod_precio" class="form-control col-md-7 col-xs-12" required type="text" placeholder="Precio de la Pieza">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="mod_cantidad" id="mod_cantidad" class="form-control col-md-7 col-xs-12" required type="text" placeholder="Cantidad Pieza">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button id="upd_data" type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> <!-- /Modal -->