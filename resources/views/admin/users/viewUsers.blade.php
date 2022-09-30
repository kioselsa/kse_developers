@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/Usuarios
@endsection

@section('content')
    <div style="text-align: right; margin:20px;">
        <a href="{{ route('register') }}" type="button" class="btn btn-info btn-sm"><i class="fas fa-user-plus" ></i></a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>               
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $us)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>                    
                    <td>
                        <a title="Editar usuario" type="button" href="" class="btn btn-success btn-sm"><i class="far fa-eye fa-sm" ></i></a>
                        <a title="Eliminar usuario" type="button" href="" class="btn btn-danger btn-sm"><i class="far fa-trash-alt fa-sm"></i></a>
                    </td>
                </tr>
            @endforeach                       
        </tbody>
    </table>
@endsection