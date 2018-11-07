@extends('layouts.app')

@section('content')

<div class="container-fluid home">
    <div class="text-center">
      <h1>Annuaire Alumnis</h1>
    </div>
    
    <table class="table table-sm table-bordered table-condensed table-striped mt-4">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Promo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th class="text-secondary">{{$user->lastname}}</th>
      <td class="text-secondary">{{$user->firstname}}</td>
      <td class="text-secondary">{{$user->promo}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection