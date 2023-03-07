@extends('layouts.layout-principal')
@section('body')
<!--bg-info Estilos de bootstrap, sirve para fondo azul -->
<div class="d-flex justify-content-center">
<!--mb: margin bottom mt: margin top col:7 de 12  -->
<div class="card bg-info mb-4 mt-4 col-7 md-7">
    <div class="card-header">
        Tema
    </div>
    <div class="card-body">
        <h5 class="card-title">Autor: </h5>
        <h5 class="card-title">Fecha: </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tempora, et adipisci deleniti unde enim excepturi! Obcaecati architecto laborum quidem porro nulla harum ipsa delectus, magnam consectetur reprehenderit aliquam? Fugit.</p>
        <div class="d-flex justify-content-end">
        <a href="yarn-answer" class="btn btn-primary">Reponder</a>
        </div>
    </div>
</div></div>
<!--bg-succes: Estilos de bootstrap, sirve para fondo verde -->
<div class="d-flex justify-content-center">
<div class="card bg-success mb-4 mt-4 col-7 md-7">
    <div class="card-header">
        Tema
    </div>
    <div class="card-body">
        <h5 class="card-title">Autor: </h5>
        <h5 class="card-title">Fecha: </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tempora, et adipisci deleniti unde enim excepturi! Obcaecati architecto laborum quidem porro nulla harum ipsa delectus, magnam consectetur reprehenderit aliquam? Fugit.</p>
        <div class="d-flex justify-content-end">
        <a href="yarn-answer" class="btn btn-primary ">Reponder</a>
    </div>
    </div>
</div>
</div>

@endsection