<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'salaire',
        'expiration',
        'secteur',
        'pays',
        'ville',
        'contrat',
        'competence',
        'qualite',
        'prerequis',
        'apercu'
    ];
}
