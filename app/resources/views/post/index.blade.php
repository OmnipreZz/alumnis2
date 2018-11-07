@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="postCat sticky-top">
        <div class="lightMain row">
        </div>
        <div class="row postNav">
            <div class="mobile">
                <button href="#menu-toggle" id="menu-toggle" class="btn btn-dark" role="button"><i class="fas fa-angle-double-right"></i></button>
                <div class="mobileDrop">
                    <form method="POST" action="{{ route('post_category') }}">
                        @csrf
                        <div class="form-group row">
                            <select name="category" id="category">
                                @foreach($categories as $id => $category)
                                <option value="{{$category->id}}"
                                @if ($hisCategory == $category->id)
                                {{'selected'}}
                                @endif
                                >{{$category->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" title="Valider" class="btn btn-dark ml-2">
                                Ok
                            </button>
                        </div>
                    </form>
                </div>     
            </div>
            

            <div class="col-md-6 col-lg-8 my-auto mobileCache ml-auto">
                <form method="POST" action="{{ route('post_category') }}" aria-label="">
                    @csrf
                    <div class="form-group row">
                        <label for="category" class="my-auto mx-2 text-white">Catégorie : </label>
                        <select name="category" id="category">
                            @foreach($categories as $id => $category)
                            <option value="{{$category->id}}"
                            @if ($hisCategory == $category->id)
                            {{'selected'}}
                            @endif
                            >{{$category->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" title="Valider" class="btn btn-dark ml-2">
                            Ok
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 col-lg-4 my-auto mobileCache">              
                <form method="POST" action="{{ route('post_category') }}" aria-label="">
                    @csrf
                    <div class="form-group row">
                        <input name="search" id="search" placeholder="Rechercher">
                        <button type="submit" title="Rechercher" class="btn btn-dark ml-2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row articles">
        @foreach ($posts as $post)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card cardArticle my-4 shadow">
                <img class="card-img-top img1" src="{{ $post->img }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h4>{{ $post->title }}</h4>
                    </div>
                </div>
                <div>
                    <span class="font-italic">{{ $post->author }}, le {{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                </div>
                <div class="text-right">
                    <a href="{{ route('post_show',$post->id) }}" type="button" class="btn btn-dark mr-2 mb-2">Go</a>
                </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>

@endsection