<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    
    protected $fillable = ['nom','date', 'photo'];
    protected $table = 'personnes';
    use HasFactory;

    function films(){
        return $this -> belongsToMany(Film::class);
    }

}

