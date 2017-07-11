<!-- Modal -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header default-primary-color text-primary-color">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Evento</h4>
            </div>
            <div class="modal-body">
                <form action="/editar_evento" method="post" id="editar_evento">
                    {{csrf_field()}}
                    <input type="hidden" name="id_evento2" id="id_evento2" required>
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo2" placeholder="Titulo" required>
                    <br>
                    <label for="titulo">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion2" cols="30" rows="10"></textarea>
                </form>
            </div>
            <div class="modal-footer text-primary-color">
                <button form="editar_evento" type="submit" class="btn btn-default" style="float: right;margin-left: 20px; background-color: #FF9800;color: white;">Actualizar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right;">Cancelar</button>
            </div>
        </div>

    </div>
</div>