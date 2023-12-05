@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Connexion</h1>

<form method="post" action="{{route('usagers.login')}}">
@csrf

    <label for="">email</label><br>
    <input type="text" name="email">

    <br>

    <label for="">password</label><br>
    <input type="password" name="password">

    <br><br>

<button type="submit" class="btn btn-primary">Connexion</button>
</form>

@endsection