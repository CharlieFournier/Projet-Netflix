@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    @if (count($personnes))

    <div class="box">
        @foreach($personnes as $personne)
        
            <a href="#"><img src="{{$personne->photo}}" width="200px"></a>
            
        @endforeach
        </div>
    @else
            <p>il n'y a pas d'acteurs</p>
    @endif
 
@endsection