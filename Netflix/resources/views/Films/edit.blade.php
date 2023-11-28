@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>modifier un film</h1>

<form method="post" action="{{route('films.update', [$film->titre])}}">
@csrf
 @method('PATCH')
   <div class="form-group">

      <label for="">Nom du film</label>
      <input type="text" class="form-control" name="titre">

       <label for="">Resume du film</label>
       <input type="text" class="form-control" name="resumer">

       <label for="">Duree du film</label>
       <input type="text" class="form-control" name="duree">

       <label for="">Annee du film</label>
       <input type="text" class="form-control" name="annee">

       <label for="">Realisateur du film</label>
       <input type="text" class="form-control" name="realisateur">

       <label for="">Producteur du film</label>
       <input type="text" class="form-control" name="producteur">

       <label for="">Url du film</label>
       <input type="text" class="form-control" name="pochetteURL">

       <label for="">Rating du film</label>
       <input type="text" class="form-control" name="rating">
       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection