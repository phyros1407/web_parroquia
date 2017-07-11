<!-- Modal -->
<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header default-primary-color text-primary-color">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Actividad</h4>
            </div>
            <div class="modal-body">
                <form action="/editar_actividad" method="post" id="editar_actividad">
                    {{csrf_field()}}
                    <input type="hidden" name="id_actividad" id="id_actividad2" required>
                    <input type="hidden" name="id_evento" value="{{$id_evento}}">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo3" placeholder="Titulo" required>
                    <br>
                    <label for="titulo">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion3" cols="30" rows="10"></textarea>
                    <br>
                    <label for="datepicker">Fechas</label>
                    <div class="input-daterange input-group fj-date" id="datepicker">
                        <input type="text" class="input-sm form-control" name="fec_ini" id="inicio3"/>
                        <span class="input-group-addon">a</span>
                        <input type="text" class="input-sm form-control" name="fec_fin" id="fin3"/>
                    </div>
                    <br>
                </form>
            </div>
            <div class="modal-footer text-primary-color">
                <button form="editar_actividad" type="submit" class="btn btn-default" style="float: right;margin-left: 20px; background-color: #FF9800;color: white;">Actualizar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right;">Cancelar</button>
            </div>
        </div>

    </div>
</div>