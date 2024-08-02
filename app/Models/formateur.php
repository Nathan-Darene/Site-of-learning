<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formateur extends Model
{
    use HasFactory;

    protected $table = 'formateur';

    protected $fillable = [
        'nom', 'prenom', 'telephone', 'email', 'mot_de_passe',
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    // Relation: un formateur peut avoir plusieurs cours
    public function courses()
    {
        return $this->hasMany(Courses::class, 'id_formateur');
    }
}
