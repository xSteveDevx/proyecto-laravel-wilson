@extends('layouts.layout-principal')
@section('body')
<form action="{{ route('article.store') }}" method="POST">
@csrf
<div class="container mt-4">
    <div class="title mt-10">
        <input type="title" name="title" placeholder="Titulo del hilo" id="title" style="border-radius:10px; border:none; text-align: center; height:1.8rem; background: #edf6f9;">
    </div>
    <div class="input">
        <textarea name="text_post" class="form-control mt-4" id="text_post" placeholder="Escribe el contenido del hilo" style="background: #edf6f9;"></textarea>
    </div>
    <div class="button d-flex justify-content-end">
        <input type="submit" class="btn btn-primary mt-3" value="Crear">
    </div>
</div>
</form>
@endsection