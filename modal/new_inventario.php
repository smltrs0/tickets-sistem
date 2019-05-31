    <div> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-new"><i class="fa fa-plus-circle"></i> Agregar Pieza de Recambio</button>
    </div>
    <div class="modal fade bs-example-modal-lg-new" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Nueva Pieza de Recambio</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask" method="post" id="add" name="add">
                        <div id="result"></div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="name" class="form-control col-md-7 col-xs-12" required type="text" placeholder="Nombre de la Pieza">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="precio" class="form-control col-md-7 col-xs-12" required type="number" placeholder="Precio de la Pieza">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="cantidad" class="form-control col-md-7 col-xs-12" required type="number" placeholder="Cantidad de Piezas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <textarea id="descripcion" name="descripcion" class="form-control col-md-7 col-xs-12" required type="text" placeholder="Descripcion de la Pieza"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button id="save_data" type="submit" class="btn btn-success">Guardar</button>
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