@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    <h1>{{$film->titre}}</h1>

    <img src="{{$film->pochetteURL}}">

@endsection