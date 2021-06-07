<!-- Modal Evaluar-->
<div class="modal fade" id="modalEvaluar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Evaluar Alumno</h5>
               
                    
            </div>
            <div class="modal-body">
                <form id="formEvaluar" name="formEvaluar">
                    <input type="hidden" name="idevaluacion" id="idevaluacion" value="">
                    
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" name="estado" id="estado">
                            <!-- <option value=0>PENDIENTE</option> -->
                            <option value=1>ACREDITADO</option>
                            <option value=2>NO ACREDITADO</option>
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