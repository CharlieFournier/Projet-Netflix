@extends('layouts.app')

@section('title', 'Page Accueil Netflix')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 text-center">
            <h1 class="text-light">{{ $film->titre }}</h1>
            <img src="{{ $film->pochetteURL }}" class="img-fluid" alt="Affiche du film">
            
            <div class="mt-3">
                <a href="{{ route('films.edit', [$film->titre]) }}" class="btn btn-primary">
                    Editer le film
                </a>
                <form method="POST" action="{{ route('films.destroy', [$film->id]) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <h2>Description</h2>
            <h6>{{ $film->resumer }}</h6>

            @if(is_object($film->realisateur) && !empty($film->realisateur->photo))
                <h2><img src="{{ $film->realisateur->photo }}" alt="Photo du réalisateur"></h2>
            @else
                <h2>Pas de photo du réalisateur disponible</h2>
            @endif

            <h2>Acteurs</h2>
            @foreach($film->acteurs as $acteur)
                <a href="{{ route('personnes.show', [$acteur->nom]) }}">
                    <img src="{{ $acteur->photo }}" alt="" width="150px" height="180px">
                </a>
                <p>{{ $acteur->nom }}</p>

            @endforeach
            <h2>Genre:</h2>
            @foreach($film->genres as $genre)
                <h3>{{ $genre->genre }}</h3>
            @endforeach
            <h1 class="text-light">Rating : {{ $film->rating}}%</h1>

        </div>
    </div>
</div>
@endsection
