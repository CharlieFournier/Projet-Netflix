<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager  extends Authenticable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'username',
        'nom',
        'prenom',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
