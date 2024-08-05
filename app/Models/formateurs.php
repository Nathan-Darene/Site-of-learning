<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formateurs extends Model
{
    use HasFactory;

    protected $table = 'formateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'formation_disponse',
        'mot_de_passe',
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
