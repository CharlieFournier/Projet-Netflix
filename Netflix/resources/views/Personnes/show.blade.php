@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')
<h1> {{$personne->nom}} </h1>
<img src="{{$personne->photo}}" width="480px" height = "720px">


    @foreach($personne->films as $film)
        <p>{{$film->titre}}</p>
        <a href="{{route('film.show', [$film->titre])}}"><img src="{{$film->pochetteURL}}"  width="200px"></a>
    @endforeach

    <div>
        <a href="{{ route('personnes.edit', [$personne->nom]) }}" class="btn btn-primary">
            Editer la personne
        </a>
        
        <form method="POST" action="{{route('personnes.destroy', [$personne->id]) }}">
    </div>
    
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>

@endsection