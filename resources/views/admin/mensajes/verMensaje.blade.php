@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/<a href="{{ route('admin.contact') }}">Contacto</a>/Mensaje
@endsection

@section('content')
   <h5><b>Emisario nombre</b>: {{ $mesage->name }} {{ $mesage->lastName }}</h5>
   <h5><b>Correo</b>: {{ $mesage->email }} </h5>
   <h5><b>Teléfono</b>: {{ $mesage->phone }} </h5>
   <div style="width: 90%; height:300px; border: 1px solid grey;">
        <p>{{ $mesage->coment }}</p>
   </div>
   <br>
   <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="text-align: center">
            <a href="{{ route('admin.contact') }}" type="button" class="btn btn-info btn-sm">Regresar</a>
            <a href="" type="button" class="btn btn-danger btn-sm">Eliminar</a>
        </div>
   </div>

@endsection