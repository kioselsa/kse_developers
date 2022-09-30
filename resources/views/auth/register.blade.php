@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/Usuarios
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="view overlay">
                <img class="card-img-top" src="{{ asset('img/userRegister.jpg') }}"
                    alt="Card image cap">               
                </div>
            
                <!-- Card content -->
                <div class="card-body">
                    <form method="POST" action="{{ route('save') }}">
                        @csrf
                        <!-- Title -->
                        <h4 class="card-title">Crear usuario</h4>
                        <!-- Cajas de texto -->
                        <div class="form-outline mb-4">
                            <input type="text" id="name" class="form-control" name="name" required autofocus value="{{ old('name') }}"/>
                            <label class="form-label" for="name">Nombre</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" name="email" required value="{{ old('email') }}"/>
                            <label class="form-label" for="email">Correo electrónico</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control" name="password" required/>
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="confPassword" class="form-control" name="confPassword" required/>
                            <label class="form-label" for="confPassword">Password</label>
                        </div>
                        <!-- Button -->
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form> 
                </div>            
            </div>
            <!-- Card -->
        </div>
        <div class="col-sm-3"></div>
    </div>
   
@endsection
