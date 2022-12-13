@extends('layouts.app')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('style')
    <style type="text/css">
        body{
            background-image: url("{{ asset('images/proyect/portadas/imagenPortada.jpg') }}") ;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            overflow: hidden;
        }
    </style>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Bienvenido</h4>
@endsection

@section('contenido')
<div class="row">
    <div class="col-5">
        <h3>
            Te invitamos a Contribuir con una donacion
        </h3>
    </div>
    
</div>
    
@endsection