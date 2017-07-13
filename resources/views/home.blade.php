@extends('layout.layout')

@section('title', 'Eventos')

@section('content')
    <div class="container" style="margin-top: 200px">
        <p style="font-size: 45px"><strong>Bienvenido {{Auth::user()->usuario}}</strong></p>
        <blockquote cite="" style="font-size: 25px">
            Este sistema ha sido realizado por la consultora VF Consulting,
            en colaboracion con la Parroquia el Señor de la Paz, la cual es
            administrada por el Parroco Guillermo.
        </blockquote>
    </div>
@endsection