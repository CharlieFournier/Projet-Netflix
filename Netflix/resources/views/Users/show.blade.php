@extends('layouts.app')

@section('title', 'Page Accueil Netflix')

@section('contenu')


<p>show</p>


<div>
        <a href="{{ route('usagers.edit', [$usager->username]) }}" class="btn btn-primary">
            Editer le user
        </a>
        
        <form method="POST" action="{{route('usagers.destroy', [$usager->id]) }}">
    </div>
    
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>

@endsection
