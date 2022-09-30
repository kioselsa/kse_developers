@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/<a href="{{ route('admin.contact') }}">Contacto</a>/Mensaje
@endsection

@section('content')
   <h6><b>Emisario nombre</b>: {{ $mesage->name }} {{ $mesage->lastName }}</h6>
   <h6><b>Correo</b>: {{ $mesage->email }} </h6>
   <h6><b>Teléfono</b>: {{ $mesage->phone }} </h6>   
   <textarea id="mensaje" readonly style="width: 90%; height:300px; border: 1px solid rgba(199, 196, 196, 0.603);">{{ $mesage->coment }}</textarea>
   <br>
   <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="text-align: center">
            <a href="{{ route('admin.contact') }}" type="button" class="btn btn-info btn-sm">Regresar</a>
            <a href="{{ route('admin.contact.destroy',$mesage->id) }}" type="button" class="btn btn-danger btn-sm">Eliminar</a>
        </div>
   </div>

@endsection