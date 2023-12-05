<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    protected $fillable = ['titre','resumer', 'duree', 'annee', 'realisateur', 'producteur', 'pochetteURL', 'rating'];
    protected $table = 'films';
    use HasFactory;


function acteurs(){
    return $this->belongsToMany(Personne::class);
}

function genres(){
    return $this->belongsToMany(genre::class);
}
function realisateur(){
    return $this->belongsTo(Personne::class,'realisateur');
}
function producteur(){
    return $this->belongsTo(Personne::class,'producteur');
}
}