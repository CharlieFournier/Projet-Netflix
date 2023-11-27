@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<div class="container-fluid align-item-center text-center">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="card">

        <div class="card-header">
            <h1>{{$film->titre}}</h1>
        </div>

        <div class="card-body">
            <img src="{{$film->pochetteURL}}" width="75%" height = 70%>
        </div>
    </div>
    </div>
    <div class="col-2"></div>
    </div>
    </div>
    @foreach($film->acteurs as $acteur)
                <a href="{{route('personnes.show', [$acteur->nom])}}">
                    <img src="{{$acteur->photo}}" alt="" width="150px" height="150px">
                </a>
                @endforeach

    
    @foreach($film->genres as $genre)
    <p>{{$genre->genre}}</p>
    @endforeach

    <a href="{{ route('films.edit', [$film->titre]) }}" class="btn btn-primary">
        Editer le film
    </a>

    <form method="POST" action="{{route('films.destroy', [$film->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
    
</form>


@endsection