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
                <th scope="col">Ver más</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $cont)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $cont->name }} {{ $cont->lastName }}</td>
                    <td>{{ $cont->email }}</td>
                    <td>{{ $cont->phone }}</td>
                </tr>
            @endforeach                       
        </tbody>
    </table>
@endsection