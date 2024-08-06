<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'titre',
        'description',
        'seance',
        'duree',
        'lieu',
        'date_debut',
        'date_fin',
        'id_formateur',
    ];

    // Relation: un cours appartient à un formateur
    public function formateur()
    {
        return $this->belongsTo(formateurs::class, 'id_formateur');
    }

    // Relation: un cours peut avoir plusieurs modules
    public function modules()
    {
        return $this->hasMany(Modules::class, 'id_cours');
    }
}
