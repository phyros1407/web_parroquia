<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header default-primary-color text-primary-color">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Crear Evento</h4>
            </div>
            <div class="modal-body">
                <form action="/crear_evento" method="post" id="crear_evento">
                    <input type="hidden" name="id_parroquia" value="{{$id_parroquia}}">
                    <label for="titulo">Titulo</label>
                    <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Titulo">
                    <br>
                    <label for="titulo">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
                </form>
            </div>
            <div class="modal-footer text-primary-color">
                <button form="crear_evento" type="button" class="btn btn-default" data-dismiss="modal" style="float: right;margin-left: 20px; background-color: #FF9800;color: white;">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right;">Cancelar</button>
            </div>
        </div>

    </div>
</div>