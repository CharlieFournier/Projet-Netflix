@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Ajouter un film</h1>

<form method="post" action="{{route('films.store')}}">
@csrf
   <div class="form-group">
      <label for="nomActeur">Nom du film</label>
      <input type="text" class="form-control" name="titre">

       <label for="nomActeur">Resume du film</label>
       <input type="text" class="form-control" name="resumer">

       <label for="nomActeur">Duree du film</label>
       <input type="text" class="form-control" name="duree">

       <label for="nomActeur">Annee du film</label>
       <input type="text" class="form-control" name="annee">

       <label for="nomActeur">Realisateur du film</label>
       <input type="text" class="form-control" name="realisateur">

       <label for="nomActeur">Producteur du film</label>
       <input type="text" class="form-control" name="producteur">

       <label for="nomActeur">lien du film</label>
       <input type="text" class="form-control" name="lienFilm">

       <label for="nomActeur">Url du film</label>
       <input type="text" class="form-control" name="pochetteURL">

       <label for="nomActeur">Rating du film</label>
       <input type="text" class="form-control" name="rating">


       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection