@extends('layouts.layout-principal')
@section('body')
<div class="container mt-4">
    <div class="title">
        <h3>Titulo de hilo</h3>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad, minus nesciunt officia sunt quae consequuntur, impedit eligendi qui dolores delectus placeat quasi, consequatur magnam. Quisquam iste velit repudiandae possimus?</p>
    </div>
    <div class="input">
        <textarea name="answer" class="form-control mb-4"></textarea>
    </div>
    <div class="button d-flex justify-content-end">
        <a href="" class="btn btn-primary">Responder</a>
    </div>
</div>
@endsection