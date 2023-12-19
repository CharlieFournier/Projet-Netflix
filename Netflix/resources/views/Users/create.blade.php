@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>Ajouter un utilisateur</h1>

<form method="post" action="{{route('usagers.store')}}">
@csrf
<div class="form-group">

<label for="nomUtilisateur">Prenom'</label>
<input type="text" class="form-control" name="prenom">

<label for="nom">Nom '</label>
<input type="text" class="form-control" name="nom">

<label for="prenom">Nom d'utilisateur'</label>
<input type="text" class="form-control" name="username">

<div class="form-group">
      <label for="email">Adresse e-mail</label>
      <input type="email" class="form-control" name="email" id="email">
</div>

<label for="password">Mot de passe</label>
<input type="password" class="form-control" name="password">

<div class="form-group">
   <label for="role">Rôle:</label><br>
   <input type="radio" name="role" value="enfant"> Enfant
   <input type="radio" name="role" value="normal"> Normal
</div>


</div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection