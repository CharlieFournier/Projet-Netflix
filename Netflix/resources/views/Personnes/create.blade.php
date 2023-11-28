@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Ajouter un film</h1>

<form method="post" action="{{route('personnes.store')}}">
@csrf
   <div class="form-group">

      <label for="nomActeur">Nom de l'acteur</label>
      <input type="text" class="form-control" name="nom">

       <label for="nomActeur">Date de l'acteur</label>
       <input type="date" class="form-control" name="date">

       <label for="nomActeur">URL photo de l'acteur</label>
       <input type="text" class="form-control" name="photo">
       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection