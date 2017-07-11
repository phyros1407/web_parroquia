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
                                   <td>{{$evento->titulo}}</td>
                                   <td>{{$evento->descripcion}}</td>
                                   <td style="text-align: center;">{{$evento->estado}}</td>
                                   <td  style="text-align: center;"><a href="">Editar</a></td>
                                   <td  style="text-align: center;"><a href="">Eliminar</a></td>
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