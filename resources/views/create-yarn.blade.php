@extends('layouts.layout-principal')
@section('body')
<form action="{{ route('post.store') }}" method="POST">
@csrf
<div class="container mt-4">

    <div class="title mt-10">
        <input type="title" name="title" placeholder="Titulo del hilo" id="title">
    </div>
    <div class="input">
        <textarea name="text_post" class="form-control mt-4" id="text_post"></textarea>
    </div>
    <div class="button d-flex justify-content-end">
        <input type="submit" class="btn btn-primary mt-3" value="Crear">
    </div>
</div>
</form>
    
@endsection