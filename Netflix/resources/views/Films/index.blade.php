@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

    @if (count($films))
    <h1> Recommandations </h1>
    <div class="box">
        @foreach($films as $film)
        
            <a href="{{route('film.show', [$film->titre])}}"><img src="{{$film->pochetteURL}}" width="200px"></a>
            
        @endforeach
        </div>
    @else
            <p>il n'y a pas de films</p>
    @endif


    @if (count($films))

        @foreach($genres as $genre)

            @if(count($genre->films))

                <h1> {{$genre->genre}}</h1>
                <div class="box">

                    @foreach($genre->films as $film)
                    
                            <a href="{{route('film.show', [$film->titre])}}">    <img src="{{$film->pochetteURL}}" alt="" width="200px"> </a>                
                    
                    @endforeach

                </div>

            @endif
            
        @endforeach
    
        @else
            <p>il n'y a pas de films</p>
    @endif



@endsection