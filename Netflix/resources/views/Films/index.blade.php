@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    @if (count($films))
        @foreach($films as $film)
            <img src="{{$film->pochetteURL}}" width="200px">
        @endforeach
    @else
            <p>il n'y a pas de films</p>
    @endif

@endsection