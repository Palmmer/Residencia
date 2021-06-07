<!-- Modal Agendar Videollamada-->
<div class="modal fade" id="modalAgendar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Agendar Videollamada</h5>
               
                    
            </div>
            <div class="modal-body">
                <form id="formAgendar" name="formAgendar">
                    <input type="hidden" name="idsolicitud" id="idsolicitud" value="">
                    <div class="form-group">
                        <label for="control-label">Link de videollamada: </label>
                        <input type="text" class="form-control" name="meeting" id="meeting" placeholder="EJEMPLO: meet.google.com/dmr-voqz-oqy" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="control-label">Fecha:</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="control-label">Hora:</label>
                        <input type="time" class="form-control" name="hora" id="hora" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="estatus">Estado</label>
                        <select class="form-control" name="estatus" id="estatus">
                            <!-- <option value=0>PENDIENTE</option> -->
                            <option value=1>CONFIRMADA</option>
                            <option value=2>CANCELADA</option>
                        </select>
                    </div>
                   

                    <div class="modal-footer">
                    <div id="message"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" id= "action" type="submit">Guardar</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>