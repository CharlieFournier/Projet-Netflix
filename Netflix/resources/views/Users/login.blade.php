@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Connexion</h1>

<form method="get" action="{{route('usagers.login')}}">
@csrf

    <label for="">username</label><br>
    <input type="text" name="nom">

    <br>

    <label for="">password</label><br>
    <input type="password" name="password">

    <br><br>

<button type="submit" class="btn btn-primary">Connexion</button>
</form>

@endsection