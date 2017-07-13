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
                    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
                    <script>
                        webshims.setOptions('forms-ext', {types: 'date'});
                        webshims.polyfill('forms forms-ext');
                    </script>
                    <div class="row">
                        <div class="col-sm-1">
                            <label for=""><strong >DE</strong></label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="date" name="fec_ini2" id="inicio3"/>
                        </div>
                        <div class="col-sm-1">
                            <label for=""><strong>A</strong></label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="date" name="fec_fin2" id="fin3"/>
                        </div>
                    </div>
                    <label for="datepicker">Horas</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <label for=""><strong >DE</strong></label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" list="listaimitestiempo" type="time" name="hor_ini" id="hor_ini2"/>
                        </div>
                        <div class="col-sm-1">
                            <label for=""><strong>A</strong></label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control"  list="listaimitestiempo" type="time" name="hor_fin" id="hor_fin2"/>
                        </div>
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
<datalist id="listaimitestiempo">
    <option value="00:00">
    <option value="01:00">
    <option value="02:00">
    <option value="03:00">
    <option value="04:00">
    <option value="05:00">
    <option value="06:00">
    <option value="07:00">
    <option value="08:00">
    <option value="09:00">
    <option value="10:00">
    <option value="11:00">
    <option value="12:00">
    <option value="13:00">
    <option value="14:00">
    <option value="15:00">
    <option value="16:00">
    <option value="17:00">
    <option value="18:00">
    <option value="19:00">
    <option value="20:00">
    <option value="21:00">
    <option value="22:00">
    <option value="23:00">
</datalist>