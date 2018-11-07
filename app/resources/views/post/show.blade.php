@extends('layouts.app')
    
@section('content')

<div class="container-fluid home text-center mb-5">
    <h1>{{ $post->title }}</h1>
    <img class="card-img-top img2" src="{{ $post->img }}" alt="Card image cap">
    <div class="mt-5">
        <p>{{ $post->content }}</p>
    </div>
    <div class="text-left">
          <span class="font-italic">{{ $post->author }}, le {{ date('d/m/Y', strtotime($post->created_at)) }}</span>  
    </div>
    <div class="text-right">
          <a href="" type="button" title="J'aime" class="btn btn-dark"><i class="fas fa-heart"></i></a>
          <a href="" type="button" title="Favoris" class="btn btn-dark"><i class="fas fa-star"></i></a>
    </div>
</div>

@endsection