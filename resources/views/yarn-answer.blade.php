@extends('layouts.layout-principal')
@section('body')
<form action="{{ route('answer.store') }}" method="POST">
@csrf
<div class="container mt-4">
    <div class="title">
        <h3 style="color:#fff;">{{$posts->find($id_p)->title}}</h3>
    </div>
    <div class="content">
        <p style="color:#fff;">{{$posts->find($id_p)->text_post}}</p>
    </div>
    <div class="input">
        <textarea name="answer" id="answer" class="form-control mb-4" placeholder="Escribe tu respuesta"></textarea>
        <input type="hidden" name="id_p"  id="id_p"  value="{{$id_p}}">
    </div>
    <div class="button d-flex justify-content-end">
    <input type="submit" class="btn btn-primary mb-3 mt-2 " value="Responder">
    
    </div>
</div>
</form>
@endsection