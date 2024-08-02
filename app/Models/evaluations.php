<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluations extends Model
{
    use HasFactory;

    protected $table = 'evaluations';

    protected $fillable = [
        'titre', 'description', 'id_module',
    ];

    // Relation: une évaluation appartient à un module
    public function module()
    {
        return $this->belongsTo(Modules::class, 'id_module');
    }
}
