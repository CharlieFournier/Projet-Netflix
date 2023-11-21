<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    protected $fillable = ['titre','resumer', 'duree', 'annee', 'realisateur', 'producteur', 'lienFilm', 'pochetteURL', 'rating'];
    protected $table = 'films';
    use HasFactory;


function acteurs(){
    return $this->belongsToMany(Personne::class);
}
}