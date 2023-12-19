@extends('layouts.app')

@section('title','Page Accueil Netflix')

@section('contenu')

<h1>modifier un Utilisateur</h1>

<form method="post" action="{{route('usagers.update', [$usager->username])}}">
@csrf
 @method('PATCH')
   <div class="form-group">

      <label for="">Username </label>
      <input type="text" class="form-control" value="{{ old('username', $usager->username) }}" disabled  name="nom">

       <label for="">mot de passe</label>
       <input type="password" class="form-control" value="" name="password">

       <label for="">Email</label>
       <input type="text" class="form-control" value="{{ old('email', $usager->email) }}" name="email">

       <label for="">Prenom</label>
       <input type="text" class="form-control" value="{{ old('prenom', $usager->prenom) }}" name="prenom">

       <label for="">Nom</label>
       <input type="text" class="form-control" value="{{ old('nom', $usager->nom) }}" name="nom">
       
   </div> 

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

 
@endsection