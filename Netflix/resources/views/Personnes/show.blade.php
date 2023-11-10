@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ $person->nom }}</div>
        <div class="card-body">
            <p>Rôle: {{ $person->role }}</p>
            <img src="{{ $personne->photo }}" alt="{{ $personne->nom }}">
        </div>
    </div>

    <h3>Autres personnes liées au même film</h3>
    <div class="row">
        @foreach ($autre as $autre)
            <div class="col-md-4">
                <a href="{{ route('person.show', $autre->id) }}">
                    <img src="{{ $autre->photo }}" alt="{{ $autre->nom }}" style="max-width: 100%;">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
