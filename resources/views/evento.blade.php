@extends('layout.layout')

@section('title', 'Eventos')

@section('content')
   <div class="mdl-grid">

       <div class="mdl-cell mdl-cell--2-col"></div>
       <div class="mdl-cell mdl-cell--8-col">
           <ul>
           @if($eventos)
               @foreach($eventos as $evento)
                       <li>{{$evento->titulo}}</li>
               @endforeach
           @endif
           </ul>
       </div>
       <div class="mdl-cell mdl-cell--2-col"></div>

   </div>
@endsection