<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    use HasFactory;


function acteurs(){
    return $this->belongsToMany(Personne::class);
}

function genres(){
    return $this->belongsToMany(genre::class);
}

}