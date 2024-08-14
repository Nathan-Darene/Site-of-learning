<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = [
        'titre', 'description', 'id_formation',
    ];

    // Relation: un module appartient à un cours
    public function course()
    {
        return $this->belongsTo(Cours::class, 'id_formation');
    }

    // Relation: un module peut avoir plusieurs évaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluations::class, 'id_module');
    }
}
