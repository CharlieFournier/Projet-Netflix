@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    @if (count($films))

    <div class="box">
        @foreach($films as $film)
        
            <a href="#"><img src="{{$film->pochetteURL}}" width="200px"></a>
            
        @endforeach
        </div>
    @else
            <p>il n'y a pas de films</p>
    @endif
 
@endsection