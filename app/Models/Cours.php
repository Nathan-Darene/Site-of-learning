<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'courses'; // Nom de la table

    protected $fillable = [
        'titre',
        'description',
        'seance',
        'duree',
        'lieu',
        'date_debut',
        'date_fin',
        'facture',
        'id_formateur',
    ];

    // Relation: un cours appartient à un formateur
    public function formateur()
    {
        return $this->belongsTo(Formateurs::class, 'id_formateur');
    }

    // Relation: un cours peut avoir plusieurs modules
    public function modules()
    {
        return $this->hasMany(Modules::class, 'id_formation');
    }

    // Relation: un cours peut être suivi par plusieurs utilisateurs
    public function users()
    {
        return $this->hasMany(users::class, 'id_formation');
    }
}
