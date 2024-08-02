<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progression extends Model
{
    use HasFactory;

    protected $table = 'progression';

    protected $fillable = [
        'id_utilisateur', 'id_module', 'pourcentage',
    ];

    // Relation: une progression appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }

    // Relation: une progression appartient à un module
    public function module()
    {
        return $this->belongsTo(Modules::class, 'id_module');
    }
}
