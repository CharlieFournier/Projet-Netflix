@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    <h1> ZOOM SUR LE FILM </h1>
    <h2> sous-titre </h2>


    <h1>{{$film->titre}}</h1>

@endsection