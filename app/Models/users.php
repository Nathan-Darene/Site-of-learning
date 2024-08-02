<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    // Nom de la table associée
    protected $table = 'users';

    // Attributs qui peuvent être assignés en masse
    protected $fillable = [
        'nom',
        'email',
        'prenom',
        'telephone',
        'mot_de_passe',
    ];

    // Attributs cachés pour les tableaux de sortie
    protected $hidden = [
        'mot_de_passe',
    ];

    // Exemple de relation: un utilisateur peut avoir plusieurs progressions
    public function progressions()
    {
        return $this->hasMany(Progression::class, 'id_utilisateur');
    }

    // Exemple de relation: un utilisateur peut avoir plusieurs certificats
    public function certificats()
    {
        return $this->hasMany(Certificats::class, 'id_utilisateur');
    }

}
