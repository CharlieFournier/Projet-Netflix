@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Ajouter un utilisateur</h1>

<form method="post" action="{{route('users.store')}}">
@csrf
   <div class="form-group">

      <label for="nomUtilisateur">Nom d'utilisateur'</label>
      <input type="text" class="form-control" name="nom">

       <label for="password">Mot de passe</label>
       <input type="date" class="form-control" name="password">
       
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection