@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/Contacto
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $cont)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cont->name }} {{ $cont->lastName }}</td>
                    <td>{{ $cont->email }}</td>
                    <td>{{ $cont->phone }}</td>
                    <td><a title="Ver mensaje" type="button" href="{{ route('admin.contact.mensage',$cont->id) }}" class="btn btn-success"><i class="far fa-eye" ></i></a></td>
                </tr>
            @endforeach                       
        </tbody>
    </table>
@endsection