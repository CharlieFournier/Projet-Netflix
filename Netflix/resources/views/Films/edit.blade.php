@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>modifier un film</h1>

<form method="post" action="{{route('films.update', [$film->titre])}}">
@csrf
 @method('PATCH')
   <div class="form-group">

      <label for="">Nom du film</label>
      <input type="text" class="form-control" value="{{ old('titre', $film->titre) }}"  name="titre">

       <label for="">Resume du film</label>
       <input type="text" class="form-control" value="{{ old('resumer', $film->resumer) }}" name="resumer">

       <label for="">Duree du film</label>
       <input type="text" class="form-control" value="{{ old('duree', $film->duree) }}" name="duree">

       <label for="">Annee du film</label>
       <input type="text" class="form-control" value="{{ old('annee', $film->annee) }}" name="annee">

       <label for="">Realisateur du film</label>
       <input type="text" class="form-control" value="{{ old('ralisateur', $film->realisateur) }}" name="realisateur">

       <label for="">Producteur du film</label>
       <input type="text" class="form-control" value="{{ old('producteur', $film->producteur) }}" name="producteur">

       <label for="">Url du film</label>
       <input type="text" class="form-control" value="{{ old('pochetteURL', $film->pochetteURL) }}" name="pochetteURL">

       <label for="">Rating du film</label>
       <input type="text" class="form-control" value="{{ old('rating', $film->rating) }}" name="rating">
       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection