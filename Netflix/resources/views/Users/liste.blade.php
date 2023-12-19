@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Liste Users</h1>

@foreach($usagers as $usager)
        
<a href="{{route('usagers.show', [$usager->username])}}"><p>{{$usager->username}}</p></a>
        
    @endforeach


@endsection