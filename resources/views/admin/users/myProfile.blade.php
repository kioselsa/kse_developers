@extends('layouts.molDashboard')

@section('ruta')
    <a href="{{ route('dashboard') }}">Dashboard</a>/MyProfile
@endsection

@section('content')
   <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="{{ route('usuarios.myprofile.update') }}" method="post"> 
                @csrf   
                <input type="hidden" name="id" readonly value="{{ $user->id }}">      
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">User</span>
                    <input class="form-control" type="text" name="name" id="name" required value="{{ $user->name }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input class="form-control" type="email" name="email" id="email" required value="{{ $user->email }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Confirm email</span>
                    <input class="form-control" type="email" name="conEmail" id="conEmail" required value="{{ $user->email }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    <input class="form-control" type="password" name="password" id="password" required value="{{ $user->password }}">
                </div>
                <input class="btn btn-secondary" type="submit" value="Modificar">
            </form> 
        </div>
        <div class="col-sm-2"></div>
   </div>
@endsection