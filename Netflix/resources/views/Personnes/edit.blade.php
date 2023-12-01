@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>modifier un Acteur</h1>

<form method="post" action="{{route('personnes.update', [$personne->nom])}}">
@csrf
 @method('PATCH')
   <div class="form-group">

      <label for="">Nom de l'acteur </label>
      <input type="text" class="form-control" value="{{ old('nom', $personne->nom) }}"  name="nom">

       <label for="">date de naissance</label>
       <input type="date" class="form-control" value="{{ old('date', $personne->date) }}" name="date">

       <label for="">URL photo</label>
       <input type="text" class="form-control" value="{{ old('photo', $personne->photo) }}" name="photo">
       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection