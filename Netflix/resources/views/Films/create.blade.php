@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<form method="post" action="{{route('films.store')}}">
@csrf
   <div class="form-group">
      <label for="titrefilm">Nom du film</label>
       <input type="text" class="form-control" id="titrefilm" placeholder="titre du film" name="titre">
   </div>
<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection