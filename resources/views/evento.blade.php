@extends('layout.layout')

@section('title', 'Eventos')

@section('content')
   <div class="row">
       <div class="col-sm-2"></div>
       <div class="col-sm-8">
           @if($eventos)
               <h3><strong>Eventos Registrados</strong></h3>
               <br>
               <div class="row">
                   <div class="col-sm-3">
                       <button type="button" class="form-control" data-toggle="modal" data-target="#myModal">Agregar Evento</button>
                   </div>
                   <div class="col-sm-9" align="right">
                       <input type="text" class="form-control" id="buscador" placeholder="Ingrese titulo, estado, ..." onkeyup="myFunction()">
                   </div>
               </div>
               <br>
               <div class="table-responsive">
                   <table class="table table-bordered" id="myTable">
                       <thead class="default-primary-color text-primary-color">
                           <tr>
                               <td><strong>Titulo</strong></td>
                               <td><strong>Descripción</strong></td>
                               <td><strong>Estado</strong></td>
                               <td colspan="2" style="text-align: center;"><strong>Opciones</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($eventos as $evento)
                               <tr>
                                   @if($evento->estado == 'A')
                                       <td>{{$evento->titulo}}</td>
                                       <td>{{$evento->descripcion}}</td>
                                       <td style="text-align: center;">ACTIVO</td>
                                       <td  style="text-align: center;"><button data-toggle="modal" data-id="{{$evento->id}}"  data-titulo="{{$evento->titulo}}" data-descripcion="{{$evento->descripcion}}" data-target="#myModal2" class="btn-link">Editar</button></td>
                                       <td  style="text-align: center;"><a href="/desa_evento/{{$evento->id}}">Deshabilitar</a></td>
                                   @else
                                       <td>{{$evento->titulo}}</td>
                                       <td>{{$evento->descripcion}}</td>
                                       <td style="text-align: center;">INACTIVO</td>
                                       <td  style="text-align: center;"><button class="btn-link" data-id="{{$evento->id}}" data-titulo="{{$evento->titulo}}" data-descripcion="{{$evento->descripcion}}" data-toggle="modal" data-target="#myModal2">Editar</button></td>
                                       <td  style="text-align: center;"><a href="/acti_evento/{{$evento->id}}">Activar</a></td>
                                   @endif
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           @endif
       </div>
       <div class="col-sm-2"></div>
   </div>

@endsection

@extends('modals.crear_evento')
@extends('modals.editar_evento')