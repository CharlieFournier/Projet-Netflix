@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')
<h1> {{$personne->nom}} </h1>


    @foreach($personne->films as $film)
        <p>{{$film->titre}}</p>
        <a href="{{route('film.show', [$film->titre])}}"><img src="{{$film->pochetteURL}}" width="200px"></a>
    @endforeach

    
    <form method="POST" action="{{route('personnes.destroy', [$personne->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>

@endsection