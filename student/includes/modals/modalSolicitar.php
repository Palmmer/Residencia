<!-- Modal Solicitar Videollamada-->
<div class="modal fade" id="modalSolicitar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Solicitar Videollamada</h5>
               
                    
            </div>
            <div class="modal-body">
                <form id="formSolicitar" name="formSolicitar">
                    <!-- <input type="hidden" name="idsolicitud" id="idsolicitud" value=""> -->
                    <div class="form-group">
                        <label for="listUnidad">¿Cual unidad requieres que te evaluen?</label>
                        <select class="form-control" name="listUnidad" id="listUnidad">
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p>Espere a que su maestro le asigne una fecha, hora y liga de videollamada.</p>
                    </div>  

                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" id= "action" type="submit">Guardar</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>