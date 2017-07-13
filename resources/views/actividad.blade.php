@extends('layout.layout')

@section('title', 'Actividad')

@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3><strong>Actividades del Evento </strong></h3>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <button type="button" class="form-control" data-toggle="modal" data-target="#myModal3" style="height: auto;background-color: #FF9800;color: white;">Agregar Actividad</button>
                </div>
                <div class="col-sm-9" align="right">
                    <input type="text" class="form-control" id="buscador" placeholder="Ingrese titulo" onkeyup="myFunction()">
                </div>
            </div>
            <br>
            @if($actividades!=null)
                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="default-primary-color text-primary-color">
                        <tr>
                            <td><strong>Titulo</strong></td>
                            <td><strong>Descripción</strong></td>
                            <td style="text-align: center;"><strong>Fecha Inicio</strong></td>
                            <td style="text-align: center;"><strong>Fecha Fin</strong></td>
                            <td colspan="2" style="text-align: center;"><strong>Opciones</strong></td>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($actividades as $actividad)
                            <tr>
                                <td>{{$actividad->titulo}}</td>
                                <td>{{$actividad->descripcion}}</td>
                                <td style="text-align: center;width: 120px;">
                                    {{date('d-m-Y',strtotime($actividad->inicio))}}<br>
                                    {{date('H:i',strtotime($actividad->inicio))}}
                                </td>
                                <td style="text-align: center;width: 120px;">
                                    {{date('d-m-Y',strtotime($actividad->fin))}}<br>
                                    {{date('H:i',strtotime($actividad->fin))}}
                                </td>
                                <td  style="text-align: center;"><button class="btn-link" data-id="{{$actividad->id}}" data-inicio="{{date('Y-m-d',strtotime($actividad->inicio))}}" data-fin="{{date('Y-m-d',strtotime($actividad->fin))}}" data-titulo="{{$actividad->titulo}}" data-descripcion="{{$actividad->descripcion}}" data-toggle="modal" data-target="#myModal4">Editar</button></td>
                                <td  style="text-align: center;"><a href="/acti_eli/{{$actividad->id}}/{{$id_evento}}">Eliminar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p><strong>POR EL MOMENTO NO HAN SIDO REGISTRADOS NUEVAS ACTIVIDADES</strong></p>
            @endif
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection

@extends('modals.crear_actividad')
@extends('modals.editar_actividad')
