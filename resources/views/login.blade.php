@extends('layouts.layout-login')

@section('body')
<form action="{{ route('login.authenticate') }}" method="POST">
   
    <div class="container text-center align-items-center container-md"> 
        @csrf
        <div class="row">
        <label for="email">Correo Electronico</label>
        </div>
        <div class="col">
        <input type="text" name="email" id="email" class="col-sm-3">
        </div>
        <label for="password" >Clave</label>
        <div class="col">
        <input type="text" name="password" id="password" class="col-sm-3">
        </div>
        <input type="submit" class="btn btn-primary mb-3 mt-2 " value="Iniciar">
        <a href="/sign-in" class="btn btn-success mt-2 mb-3">Registrarse</a>
        
    </div>
</form>
    
@endsection