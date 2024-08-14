<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificats extends Model
{
    use HasFactory;

    protected $table = 'certificats';

    protected $fillable = [
        'id_utilisateur', 'id_cours', 'date_délivrance', 'code_certificat',
    ];

    // Relation: un certificat appartient à un utilisateur
    public function users()
    {
        return $this->belongsTo(users::class, 'id_utilisateur');
    }

    // Relation: un certificat est lié à un cours
    public function course()
    {
        return $this->belongsTo(Cours::class, 'id_cours');
    }
}
