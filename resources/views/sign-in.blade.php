@extends('layouts.layout-login')
@section('body')
<form action = "{{ route('user.store') }}" method="POST">
    @csrf
    <div class="container text-center align-items-center">
        <div class="row">
        <h2>Registrar Usuario</h2>
        <div class="col-12">
        <label for="email">Correo Electrónico</label>
        </div>
        <div class="col-12">
        <input type="text" class="col-sm-3" name="email" id="email"></div>
        <div class="col-12">
        <label for="">Contraseña</label></div>
        <div class="col-12">
        <input type="text" name="password" class="col-sm-3" id="password"></div>
        <div class="col-12">
        <label for="">Repetir Contraseña</label></div>
        <div class="col-12">
        <input type="text" name="password" class="col-sm-3" id="password"></div>
        <div class="col-12">
        <label for="" class="mt-3">Nombre Completo</label></div>
        <div class="col-12">
        <input type="text" name="full_name" class="col-sm-3" id="full_name"></div>
        <div class="col-12">
        <label for="">Teléfono</label></div>
        <div class="col-12">
        <input type="text" name="phone" class="col-sm-3" id="phone"></div>
        <br></div>
        <a href="\" class="btn btn-primary mb-3 mt-2">Atrás</a>
        <input type="submit" class="btn btn-primary mb-3 mt-2 " value="Crear Usuario">
        
    </div>
    </form>
@endsection