@extends('layouts.app')

@section('content')

<div class="container-fluid home">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-secondary">Créer un nouvel article<h2>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('post_store') }}" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Titre') }} :</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Contenu') }} :</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="5" required style="resize:none;"></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('URL Image') }} :</label>

                            <div class="col-md-6">
                                <input type="url" id="img" class="form-control" name="img" placeholder="https://" required style="resize:none;"></input>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category"class="col-md-4 col-form-label text-md-right">{{ __('Catégorie') }} :</label>
                            <select name="category" class="form-control col-md-6" id="category">
                            
                                <option>Choisissez une catégorie</option>
                                
                                @foreach($categories as $id => $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Créer') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection