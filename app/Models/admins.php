<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    use HasFactory;

    // Nom de la table associée
    protected $table = 'admins';

    // Attributs qui peuvent être assignés en masse
    protected $fillable = [
        'nom',
        'telephone',
        'email',
        'password',
    ];

    // Attributs cachés pour les tableaux de sortie
    protected $hidden = [
        'mot_de_passe',
    ];
}
