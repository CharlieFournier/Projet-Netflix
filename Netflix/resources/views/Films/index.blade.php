@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')
    <h1>Netflix</h1>

    @if (count($films))
        @foreach($films as $film)
            <h2>{{$film->titre}}</h2>
        @endforeach
    @else
            <p>il n'y a pas de films</p>
    @endif

@endsection