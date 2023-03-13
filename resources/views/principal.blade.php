@extends('layouts.layout-principal')
@section('body')


@foreach ($posts as $post)
<form action="{{url('/yarn-answer/'.'id='.$post->id)}}" method="GET">
@csrf
<div  class="d-flex justify-content-center">
    <div class="card text-bg-light mb-4 mt-4 col-7 md-7">
        <div class="card-header">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <h6>Autor: {{$post->name_user}}</h6>
            <p>Fecha: {{$post->created_at}}</p>
            <p>{{ $post->text_post }}</p>
            <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-dark mb-3 mt-2" style="font-family: roboto; font-size: 1rem; font-weight: light-bold;" value="Responder">
            </div>
        </div>
    </div>
    
</div>
</form>
@endforeach

@endsection
