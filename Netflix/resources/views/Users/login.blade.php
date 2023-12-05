@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Connexion</h1>

<!-- <form method="post" action="{{route('films.index')}}"> -->
@csrf

    <label for="">username</label>
    <input type="text" name="nom">

    <br>

    <label for="">password&nbsp</label>
    <input type="password" name="password">

    <br><br>

<button type="submit" class="btn btn-primary">Connexion</button>
<!-- </form> -->

@endsection